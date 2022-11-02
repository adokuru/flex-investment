<?php

namespace Database\Seeders;

use App\Models\InvestmentPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvestmentPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InvestmentPlan::create([
            'name' => 'Low Yield Plan',
            'description' => 'Basic Investment Plan',
            'contract_duration' => 40,
            'minimum_price' => 10000,
            'maximum_price' => 100000,
            'return_rate' => 0.70,
        ]);
        InvestmentPlan::create([
            'name' => 'Insurance Plan',
            'description' => 'Medium Investment Plan',
            'contract_duration' => 170,
            'minimum_price' => 100000,
            'maximum_price' => 500000,
            'return_rate' => 3.00,
        ]);
        InvestmentPlan::create([
            'name' => 'High Yield Plan',
            'description' => 'High Investment Plan',
            'contract_duration' => 40,
            'minimum_price' => 500000,
            'maximum_price' => 1000000,
            'return_rate' => 6.00,
        ]);
        InvestmentPlan::create([
            'name' => 'Crowd-Funding Plan',
            'description' => 'High Investment Plan',
            'contract_duration' => 25,
            'minimum_price' => 1000000,
            'maximum_price' => 3000000,
            'return_rate' => 8.50,
        ]);
        InvestmentPlan::create([
            'name' => 'CO Investment',
            'description' => 'High Investment Plan',
            'contract_duration' => 18,
            'minimum_price' => 4000000,
            'maximum_price' => 10000000000,
            'return_rate' => 8.00,
        ]);
        InvestmentPlan::create([
            'name' => 'Mega investment',
            'description' => 'Mega Investment Plan',
            'contract_duration' => 30,
            'minimum_price' => 5000000,
            'maximum_price' => 10000000000,
            'return_rate' => 8.50,
        ]);
    }
}
