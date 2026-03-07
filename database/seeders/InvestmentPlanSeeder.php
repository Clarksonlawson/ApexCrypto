<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InvestmentPlan;

class InvestmentPlanSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            ['name' => 'Test', 'min_investment' => 500, 'max_investment' => 2999, 'return_rate' => 80, 'duration' => '10 Minutes'],
            ['name' => 'Beginner Plan', 'min_investment' => 100, 'max_investment' => 25000, 'return_rate' => 300, 'duration' => '10 Minutes'],
            ['name' => 'Standard Plan', 'min_investment' => 25000, 'max_investment' => 100000, 'return_rate' => 2.5, 'duration' => '60 Days'],
            ['name' => 'Business Plan', 'min_investment' => 100000, 'max_investment' => 1000000, 'return_rate' => 3.1, 'duration' => '60 Days'],
            // Add 10 more plans here with different values
        ];

        foreach ($plans as $plan) {
            InvestmentPlan::create($plan);
        }
    }
}
