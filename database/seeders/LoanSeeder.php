<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loans')->insert([
            [
                'user_email' => 'clarksonlawson1@gmail.com',
                'loan_id' => 'LN-' . strtoupper(Str::random(6)),
                'status' => 'Active Loan',
                'amount_usd' => 25000.00,
                'collateral_btc' => 0.35,
                'ltv' => 50.00,
                'interest_rate' => 7.50,
                'ticker' => 'BTC',
                'collateral_wallet_address' => 'bc1qexamplewalletaddress001',
                'start_date' => Carbon::now()->subMonths(3),
                'end_date' => Carbon::now()->addMonths(9),
                'account_number' => 'AC-' . rand(1000000000, 9999999999),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_email' => 'clarksonlawson1@gmail.com',
                'loan_id' => 'LN-' . strtoupper(Str::random(6)),
                'status' => 'Pending Approval',
                'amount_usd' => 10000.00,
                'collateral_btc' => 0.12,
                'ltv' => 45.00,
                'interest_rate' => 6.80,
                'ticker' => 'BTC',
                'collateral_wallet_address' => 'bc1qexamplewalletaddress002',
                'start_date' => Carbon::now()->subWeeks(1),
                'end_date' => Carbon::now()->addMonths(12),
                'account_number' => 'AC-' . rand(1000000000, 9999999999),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_email' => 'clarksonlawson1@gmail.com',
                'loan_id' => 'LN-' . strtoupper(Str::random(6)),
                'status' => 'Completed',
                'amount_usd' => 15000.00,
                'collateral_btc' => 0.25,
                'ltv' => 55.00,
                'interest_rate' => 8.20,
                'ticker' => 'BTC',
                'collateral_wallet_address' => 'bc1qexamplewalletaddress003',
                'start_date' => Carbon::now()->subMonths(10),
                'end_date' => Carbon::now()->subWeeks(2),
                'account_number' => 'AC-' . rand(1000000000, 9999999999),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
