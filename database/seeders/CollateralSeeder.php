<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\UserWallet;

class CollateralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        if ($users->isEmpty()) {
            $this->command->warn('⚠️ No users found. Please seed users first.');
            return;
        }

        // Default system wallet addresses (fallbacks)
        $defaultWallets = [
            'BTC' => 'bc1qsystemdefaultwallet0000000000000000000000',
            'ETH' => '0xsystemdefaultwallet0000000000000000000000000',
            'USDT' => '0xsystemdefaultusdtwallet00000000000000000000',
        ];

        foreach ($users as $user) {
            $now = now();
            $rows = [];

            // Create 3 random collateral entries per user
            foreach (['BTC', 'ETH', 'USDT'] as $symbol) {

                // Try to find user's wallet for the asset
                $wallet = DB::table('user_wallets')->where('user_id', $user->id)
                    ->where('asset_symbol', $symbol)
                    ->first();

                // Use wallet address if exists, otherwise fallback to system default
                $walletAddress = $wallet ? $wallet->wallet_address : $defaultWallets[$symbol];

                $assetNames = [
                    'BTC' => 'Bitcoin',
                    'ETH' => 'Ethereum',
                    'USDT' => 'Tether (USDT)',
                ];

                $rows[] = [
                    'user_id'       => $user->id,
                    'asset_symbol'  => $symbol,
                    'asset_name'    => $assetNames[$symbol],
                    'amount'        => fake()->randomFloat(8, 0.01, 3),
                    'usd_value'     => fake()->randomFloat(2, 100, 15000),
                    'wallet_address'=> $walletAddress,
                    'network'       => fake()->randomElement(['Bitcoin', 'Ethereum', 'BSC', 'Polygon']),
                    'status'        => fake()->randomElement(['active', 'locked', 'released']),
                    'loan_id'       => null,
                    'created_at'    => $now,
                    'updated_at'    => $now,
                    'collateral_id' => 'COLL-' . strtoupper(fake()->unique()->lexify('??????????')),
                ];
            }

            DB::table('collaterals')->insert($rows);
        }

        $this->command->info('✅ Collaterals table seeded successfully!');
    }
}
