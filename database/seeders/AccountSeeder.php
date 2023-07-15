<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $total_incomes = 225000;
        $total_expenses = 46370;
        $budget = $total_incomes - $total_expenses;

        $newAccount = Account::create([
            'user_id' => 1,
            'total_incomes' => $total_incomes,
            'total_expenses' => $total_expenses,
            'budget' => $budget,
        ]);

        $subCategories = [
            [
                'sub_category_id' => 1,
                'amount' => 100000,
            ],
            [
                'sub_category_id' => 2,
                'amount' => 100000,
            ],
            [
                'sub_category_id' => 5,
                'amount' => 25000,
            ],
            [
                'sub_category_id' => 7,
                'amount' => 20000,
            ],
            [
                'sub_category_id' => 10,
                'amount' => 1500,
            ],
            [
                'sub_category_id' => 11,
                'amount' => 500,
            ],
            [
                'sub_category_id' => 12,
                'amount' => 1500,
            ],
            [
                'sub_category_id' => 13,
                'amount' => 1000,
            ],
            [
                'sub_category_id' => 19,
                'amount' => 1500,
            ],
            [
                'sub_category_id' => 20,
                'amount' => 250,
            ],
            [
                'sub_category_id' => 29,
                'amount' => 15000,
            ],
            [
                'sub_category_id' => 49,
                'amount' => 1000,
            ],
            [
                'sub_category_id' => 64,
                'amount' => 4000,
            ],
            [
                'sub_category_id' => 66,
                'amount' => 120,
            ],
        ];

        //        foreach($subCategories as $subCategory) {
        //            $results[] = array(
        //                "sub_category_id" => $subCategory['sub_category_id'],
        //                "amount" => $subCategory['amount'],
        //            );
        //        }

        $newAccount->accountTransactions()->createMany($subCategories);
    }
}
