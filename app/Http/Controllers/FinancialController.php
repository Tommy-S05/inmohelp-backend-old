<?php

namespace App\Http\Controllers;
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Credentials: true');

use App\Models\Account;
use App\Models\AccountTransaction;
use App\Models\Property;
use App\Models\Setting;
use App\QueryFilters\Property\BathroomsFilter;
use App\QueryFilters\Property\BedroomsFilter;
use App\QueryFilters\Property\GaragesFilter;
use App\QueryFilters\Property\MaxPriceFilter;
use App\QueryFilters\Property\MinPriceFilter;
use App\QueryFilters\Property\NeighborhoodFilter;
use App\QueryFilters\Property\ProvinceFilter;
use App\QueryFilters\Property\PurposeFilter;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FinancialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function monthlyPayments(Request $request)
    {
        $settings = Setting::where('user_id', 1)->first();
        //        $property = Property::find($property_id);
        if($request->price < $settings->down_payment_available) {
            $payment = 0;
            return response()->json($payment);
        }
        $loan = $request->price - $settings->down_payment_available;
        $periods = $settings->loan_term * 12;
        $interest = (((1 + ($settings->interest_rate / 100)) ** (1 / 12)) - 1);

        //        $payment = $loan * (($interest * (1 + $interest) ** $periods) / ((1 + $interest) ** $periods - 1));
        $payment = ($request->price - $settings->down_payment_available) * (($interest * pow((1 + $interest), $periods)) / (pow((1 + $interest), $periods) - 1));
        //        $payment = ($interest * $loan) / (1 - (1 + $interest) ** (-$periods));
        return response()->json($payment);
    }

    private function monthlyPaymentsSql()
    {
        $settings = Setting::where('user_id', 1)->first();
        $periods = $settings->loan_term * 12;
        $interest = (((1 + ($settings->interest_rate / 100)) ** (1 / 12)) - 1);
        $downPayment = $settings->down_payment_available;

        //(((POW((1 + ($interest / 12)), $periods)) * ($interest / 12)) / ((POW((1 + ($interest / 12)), $periods)) - 1))
        $sql = "CASE
                WHEN price < $downPayment THEN 0
                ELSE (price - $downPayment) * (($interest * POW((1 + $interest), $periods)) / (POW((1 + $interest), $periods) - 1))
            END";

        return $sql;
    }

    public function monthlyBudget()
    {
        //        $accounts = Account::where('user_id', Auth::user()->id)->get();
        $account = Account::where('user_id', 1)->first();
        $available = $account->budget * 0.7;
        return response()->json($available);
    }

    public function monthlyBudget2()
    {
        $account = Account::where('user_id', 1)->first();
        $available = $account->total_incomes * 0.28;
        $houseSpend = $account->accountTransactions()
            ->join('sub_categories', 'account_transactions.sub_category_id', '=', 'sub_categories.id')
            ->join('categories', 'sub_categories.category_id', '=', 'categories.id')
            ->where('categories.id', 2)
            ->sum('account_transactions.amount');
        $available = $available - $houseSpend;
        return response()->json($available);
    }


    public function affordableProperties(Request $request)
    {
        $available = $this->monthlyBudget()->getData();

        $perPage = $request->input('per_page', 5); // Obtener el número de elementos por página de la solicitud
        $currentPage = $request->input('page', 1); // Obtener la página actual de la solicitud

        $query = Property::query()
            ->select('id', 'name', 'slug', 'province', 'purpose', 'price', 'area', 'bedrooms', 'bathrooms', 'garages')
            ->whereRaw('(' . $this->monthlyPaymentsSql() . ') <= ?', [$available]);

        $properties = app(Pipeline::class)
            ->send($query)
            ->through([
                PurposeFilter::class,
                ProvinceFilter::class,
                NeighborhoodFilter::class,
                BedroomsFilter::class,
                BathroomsFilter::class,
                GaragesFilter::class,
                MinPriceFilter::class,
                MaxPriceFilter::class,
            ])
            ->thenReturn()
            ->get();
        //            ->paginate($perPage, ['*'], 'page', $currentPage);

        return response()->json([
            'success' => true,
            'message' => 'Affordable properties',
            'data' => $properties
        ]);
    }

    //    public function affordableProperties()
    //    {
    //        $available = $this->monthlyBudget()->getData();
    //        //        $properties = Property::select('*')
    //        //            ->whereRaw('monthlyPayments(price) <= ?', [$available])
    //        //            //            ->whereRaw('? <= ?', [50000, $available])
    //        //            ->get();
    //
    //        $properties = Property::all(['id', 'name', 'slug', 'province', 'purpose', 'price', 'area', 'bedrooms', 'bathrooms', 'garages'])
    //            ->filter(function($property) use ($available) {
    //                $request = new Request();
    //                $request->price = $property->price;
    //                $monthlyPayments = $this->monthlyPayments($request)->getData();
    //                if($monthlyPayments <= $available) {
    //                    return $property;
    //                }
    //                return null;
    //            })->values();
    //        return response()->json([
    //            'success' => true,
    //            'message' => 'Affordable properties',
    //            'data' => $properties
    //        ]);
    //    }

    public function affordableProperties2()
    {
        $available = $this->monthlyBudget2()->getData();
        $properties = Property::all()->filter(function($property) use ($available) {
            $request = new Request();
            $request->price = $property->price;
            //            $request->merge(['price' => $property->price]);
            $monthlyPayments = $this->monthlyPayments($request)->getData();
            if($monthlyPayments <= $available) {
                return $property;
            }
            return null;
        })->values();
        return response()->json([
            'success' => true,
            'message' => 'Affordable properties',
            'data' => $properties
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}
