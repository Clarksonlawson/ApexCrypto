<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SystemCollaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('system_collaterals')->insert([
           [
            'collaterals' => 'Bitcoin',
            'usd_value' => 0,
            'wallet_address' => 'bc1q9dtJefHEyI3AH90YJcdy6TM72hnmHP',
            'symbol' => 'BTC',
             'network' => 'Bitcoin',
            'created_at' => Now(),
            'updated_at' => Now(),
           ],

           [
            'collaterals' => 'Ethereum',
            'usd_value' => 0,
            'wallet_address' => '0xkeYstALDMMaVmplga0G2qex67jySQ0FcJYpi6C1R',
            'symbol' => 'ETH',
            'network' => 'Ethereum',
            'created_at' => Now(),
            'updated_at' => Now(),
           ],

           [
            'collaterals' => 'USDT',
            'usd_value' => 0,
            'wallet_address' => '0xkeYstALDMMaVmplga0G2qex67jySQ0pi6C1R',
            'symbol' => 'USDT',
            'network' => 'USDT',
            'created_at' => Now(),
            'updated_at' => Now(),
           ],

           [
            'collaterals' => 'PI',
            'usd_value' => 0,
            'wallet_address' => '0xkeYstALDMMaVmpl7jySQ0piC1R',
            'symbol' => 'PI',
            'network' => 'PI',
            'created_at' => Now(),
            'updated_at' => Now(),
           ],
        ]);

         $this->command->info('System Collaterals seeded successfully!');
    }
}
