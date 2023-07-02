<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\AccountTransaction;
use App\Models\Property;
use App\Models\Setting;
use Illuminate\Http\Request;
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

        $payment = $loan * (($interest * (1 + $interest) ** $periods) / ((1 + $interest) ** $periods - 1));
        //        $payment = ($interest * $loan) / (1 - (1 + $interest) ** (-$periods));
        return response()->json($payment);
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

    public function affordableProperties()
    {
        $available = $this->monthlyBudget()->getData();
        //        $properties = Property::select('*')
        //            ->whereRaw('monthlyPayments(price) <= ?', [$available])
        //            //            ->whereRaw('? <= ?', [50000, $available])
        //            ->get();

        $properties = Property::all()->filter(function($property) use ($available) {
            $request = new Request();
            $request->price = $property->price;
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
