<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserWalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Make sure we have users first
        $users = User::all();

        if ($users->isEmpty()) {
            $this->command->warn('No users found. Please seed users first.');
            return;
        }

        $assets = [
            ['symbol' => 'BTC', 'network' => 'Bitcoin'],
            ['symbol' => 'ETH', 'network' => 'Ethereum'],
            ['symbol' => 'USDT', 'network' => 'Ethereum'],
        ];

        foreach ($users as $user) {
            foreach ($assets as $asset) {

                // Generate a fake wallet address format depending on network
                $walletAddress = match ($asset['network']) {
                    'Bitcoin' => 'bc1q' . Str::random(30),
                    'Ethereum' => '0x' . Str::random(40),
                    default => Str::random(42),
                };

                DB::table('user_wallets')->updateOrInsert(
                    [
                        'user_id' => $user->id,
                        'asset_symbol' => $asset['symbol'],
                        'network' => $asset['network'],
                    ],
                    [
                        'wallet_address' => $walletAddress,
                    ]
                );
            }
        }

        $this->command->info('✅ User wallets seeded successfully!');
    }
}
