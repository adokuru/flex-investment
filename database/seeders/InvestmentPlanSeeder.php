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
            'minimum_price' => 10000,
            'maximum_price' => 99000,
            'fixed_return_rate' => 75.9,
            'flexible_return_rate' => 30,
        ]);
        InvestmentPlan::create([
            'investment_type_id' => 1,
            'name' => 'Silver Plan',
            'description' => 'Medium Investment Plan',
            'contract_duration' => 12,
            'minimum_price' => 100000,
            'maximum_price' => 499000,
            'fixed_return_rate' => 151.8,
            'flexible_return_rate' => 60,
        ]);
        InvestmentPlan::create([
            'investment_type_id' => 1,
            'name' => 'Gold Plan',
            'description' => 'High Investment Plan',
            'contract_duration' => 18,
            'minimum_price' => 500000,
            'maximum_price' => 999000,
            'fixed_return_rate' => 227.4,
            'flexible_return_rate' =>  90,
        ]);
        InvestmentPlan::create([
            'investment_type_id' => 1,
            'name' => 'Platinum Plan',
            'description' => 'High Investment Plan',
            'contract_duration' => 24,
            'minimum_price' => 1000000,
            'maximum_price' => 4999000,
            'fixed_return_rate' => 303.6,
            'flexible_return_rate' => 120,
        ]);

        InvestmentPlan::create([
            'investment_type_id' => 3,
            'name' => 'Trial Plan',
            'description' => 'This is a trial plan to allow you access to the platform',
            'contract_duration' => 1,
            'minimum_price' => 1000,
            'maximum_price' => 9000,
            'fixed_return_rate' => 12.5,
            'flexible_return_rate' => 5,
        ]);


        InvestmentPlan::create([
            'investment_type_id' => 2,
            'name' => 'Bronze Plan',
            'description' => 'Basic Investment Plan',
            'contract_duration' => 6,
            'minimum_price' => 10000,
            'maximum_price' => 99000,
            'fixed_return_rate' => 75.9,
            'flexible_return_rate' => 30,
        ]);
        InvestmentPlan::create([
            'investment_type_id' => 2,
            'name' => 'Silver Plan',
            'description' => 'Medium Investment Plan',
            'contract_duration' => 12,
            'minimum_price' => 100000,
            'maximum_price' => 499000,
            'fixed_return_rate' => 151.8,
            'flexible_return_rate' => 60,
        ]);
        InvestmentPlan::create([
            'investment_type_id' => 2,
            'name' => 'Gold Plan',
            'description' => 'High Investment Plan',
            'contract_duration' => 18,
            'minimum_price' => 500000,
            'maximum_price' => 999000,
            'fixed_return_rate' => 227.4,
            'flexible_return_rate' =>  90,
        ]);
        InvestmentPlan::create([
            'investment_type_id' => 2,
            'name' => 'Platinum Plan',
            'description' => 'High Investment Plan',
            'contract_duration' => 24,
            'minimum_price' => 1000000,
            'maximum_price' => 4999000,
            'fixed_return_rate' => 303.6,
            'flexible_return_rate' => 120,
        ]);
    }
}
