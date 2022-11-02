<?php

namespace Database\Seeders;

use App\Models\TransactionsType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransactionsType::create([
            'name' => 'Deposit',
            'description' => 'Deposit into your account',
        ]);
        TransactionsType::create([
            'name' => 'Withdrawal',
            'description' => 'Withdrawal from your account',
        ]);
        TransactionsType::create([
            'name' => 'Investment',
            'description' => 'Investment into a plan',
        ]);
        TransactionsType::create([
            'name' => 'Refund',
            'description' => 'Refund from a plan',
        ]);
        TransactionsType::create([
            'name' => 'Interest',
            'description' => 'Interest from a plan',
        ]);
    }
}
