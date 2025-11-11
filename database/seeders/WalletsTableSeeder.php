<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class WalletsTableSeeder extends Seeder
{
    public function run(): void
    {
        $userIds = DB::table('users')->pluck('id')->toArray();

        if (empty($userIds)) {
            $this->command->info('No users found. Please seed users first.');
            return;
        }

        $networks = ['Ethereum', 'Bitcoin', 'Binance Smart Chain', 'Polygon', 'Tron'];
        $symbols = ['ETH', 'BTC', 'BNB', 'MATIC', 'TRX'];
        $statuses = ['active', 'destroyed']; // only valid

        $wallets = [];

        // Generate all possible unique pairs
        $allPairs = [];
        foreach ($userIds as $userId) {
            foreach ($networks as $key => $network) {
                $allPairs[] = [
                    'user_id' => $userId,
                    'asset_symbol' => $symbols[$key],
                    'network' => $network,
                ];
            }
        }

        shuffle($allPairs); // randomize

        // Pick first 20 wallets
        $pairsToUse = array_slice($allPairs, 0, 20);

        foreach ($pairsToUse as $pair) {
            $wallets[] = [
                'user_id' => $pair['user_id'],
                'asset_symbol' => $pair['asset_symbol'],
                'network' => $pair['network'],
                'wallet_address' => '0x'.Str::random(40),
                'status' => $statuses[array_rand($statuses)],
                'created_at' => Carbon::now()->subDays(rand(1, 30)),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('user_wallets')->insert($wallets);

        $this->command->info('Wallets seeded successfully!');
    }
}
