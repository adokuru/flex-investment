<?php

namespace Database\Seeders;

use App\Models\InvestmentPlan;
use App\Models\InvestmentType;
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

        InvestmentType::create([
            'name' => 'Fixed'
        ]);
        InvestmentType::create([
            'name' => 'Flexible'
        ]);
        InvestmentType::create([
            'name' => 'Trial'
        ]);



        InvestmentPlan::create([
            'investment_type_id' => 1,
            'name' => 'Bronze Plan',
            'description' => 'Basic Investment Plan',
            'contract_duration' => 6,
            'minimum_price' => 5000,
            'maximum_price' => 49999,
            'fixed_return_rate' => 6.5,
            'flexible_return_rate' => 4.5,
        ]);
        InvestmentPlan::create([
            'investment_type_id' => 1,
            'name' => 'Insurance Plan',
            'description' => 'Medium Investment Plan',
            'contract_duration' => 6,
            'minimum_price' => 50000,
            'maximum_price' => 99999,
            'fixed_return_rate' => 7.5,
            'flexible_return_rate' => 5.5,
        ]);
        InvestmentPlan::create([
            'investment_type_id' => 1,
            'name' => 'High Yield Plan',
            'description' => 'High Investment Plan',
            'contract_duration' => 6,
            'minimum_price' => 100000,
            'maximum_price' => 499999,
            'fixed_return_rate' => 8.5,
            'flexible_return_rate' => 6.5,
        ]);
        InvestmentPlan::create([
            'investment_type_id' => 1,
            'name' => 'Crowd-Funding Plan',
            'description' => 'High Investment Plan',
            'contract_duration' => 6,
            'minimum_price' => 500000,
            'maximum_price' => 30000000,
            'fixed_return_rate' => 10.0,
            'flexible_return_rate' => 7.5,
        ]);

        InvestmentPlan::create([
            'investment_type_id' => 3,
            'name' => 'Trial Plan',
            'description' => 'This is a trial plan to allow you access to the platform',
            'contract_duration' => 1,
            'minimum_price' => 500,
            'maximum_price' => 30000000,
            'fixed_return_rate' => 10.0,
            'flexible_return_rate' => 7.5,
        ]);


        InvestmentPlan::create([
            'investment_type_id' => 2,
            'name' => 'Bronze Plan',
            'description' => 'Basic Investment Plan',
            'contract_duration' => 6,
            'minimum_price' => 5000,
            'maximum_price' => 49999,
            'fixed_return_rate' => 6.5,
            'flexible_return_rate' => 4.5,
        ]);
        InvestmentPlan::create([
            'investment_type_id' => 2,
            'name' => 'Insurance Plan',
            'description' => 'Medium Investment Plan',
            'contract_duration' => 6,
            'minimum_price' => 50000,
            'maximum_price' => 99999,
            'fixed_return_rate' => 7.5,
            'flexible_return_rate' => 5.5,
        ]);
        InvestmentPlan::create([
            'investment_type_id' => 2,
            'name' => 'High Yield Plan',
            'description' => 'High Investment Plan',
            'contract_duration' => 6,
            'minimum_price' => 100000,
            'maximum_price' => 499999,
            'fixed_return_rate' => 8.5,
            'flexible_return_rate' => 6.5,
        ]);
        InvestmentPlan::create([
            'investment_type_id' => 2,
            'name' => 'Crowd-Funding Plan',
            'description' => 'High Investment Plan',
            'contract_duration' => 6,
            'minimum_price' => 500000,
            'maximum_price' => 30000000,
            'fixed_return_rate' => 10.0,
            'flexible_return_rate' => 7.5,
        ]);
    }
}
