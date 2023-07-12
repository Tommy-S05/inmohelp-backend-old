<?php

namespace App\Http\Controllers;
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Credentials: true');

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accounts = Account::where('user_id', 1)->get();
        return response()->json($accounts->load('accountTransactions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //        return response()->json($request->all());
        $budget = $request->total_incomes - $request->total_expenses;

        $newAccount = Account::create([
            //            'user_id' => Auth::user()->id,
            'user_id' => 1,
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
