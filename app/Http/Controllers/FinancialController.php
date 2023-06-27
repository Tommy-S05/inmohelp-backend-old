<?php

namespace App\Http\Controllers;

use App\Models\Account;
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
        //
    }

    public function monthlyPayments($price)
    {
        $settings = Setting::where('user_id', 1)->first();
        //        $property = Property::find($property_id);
        $loan = $price - $settings->down_payment_available;
        $periods = $settings->loan_term * 12;
        $interest = (((1 + ($settings->interest_rate / 100)) ** (1 / 12)) - 1);

        $payment = $loan * (($interest * (1 + $interest) ** $periods) / ((1 + $interest) ** $periods - 1));
        //        $payment = 20000 * ((0.03 * (1 + 0.03) ** 12) / ((1 + 0.03) ** 12 - 1));
        //        $payment = ($interest * $loan) / (1 - (1 + $interest) ** (-$periods));
        return response()->json($payment);
    }

    public function monthlyBudget()
    {
        //        $res = $this->monthlyPayments(17495047.00)->getData();
        //        return response()->json($res);
        //        $accounts = Account::where('user_id', Auth::user()->id)->get();
        $account = Account::where('user_id', 1)->first();
        $available = $account->budget * 0.7;
        //        $summary = $account->accountTransactions()->selectRaw('sub_category_id, sum(amount) as total')->groupBy('sub_category_id')->get();
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
            $monthlyPayments = $this->monthlyPayments($property->price)->getData();
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
        $budget = $request->total_incomes - $request->total_expenses;

        $newAccount = Account::create([
            'user_id' => Auth::user()->id,
            'total_incomes' => $request->total_incomes,
            'total_expenses' => $request->total_expenses,
            'budget' => $budget,
        ]);
        foreach($request->subCategories as $subCategory) {
            $results[] = array(
                "sub_category_id" => $subCategory['subCategory_id'],
                "amount" => $subCategory['amount'],
            );
        }

        $newAccount->accountTransactions()->createMany($results);
        return response()->json([
            'success' => true,
            'message' => 'Account created successfully',
            'data' => $newAccount->load('accountTransactions')
        ], 201);
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
