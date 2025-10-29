<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CollateralFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $assets = [
            ['symbol' => 'BTC', 'name' => 'Bitcoin'],
            ['symbol' => 'ETH', 'name' => 'Ethereum'],
            ['symbol' => 'USDT', 'name' => 'Tether'],
        ];

        $asset = $assets[array_rand($assets)];

        return [
            'asset_symbol' => $asset['symbol'],
            'asset_name' => $asset['name'],
            'amount' => $this->faker->randomFloat(6, 0.01, 5),
            'usd_value' => $this->faker->randomFloat(2, 100, 10000),
            'wallet_address' => $this->faker->regexify('[A-Za-z0-9]{42}'),
            'network' => $this->faker->randomElement(['Ethereum', 'Bitcoin', 'BSC', 'Polygon']),
            'status' => $this->faker->randomElement(['active', 'locked', 'released']),
            'loan_id' => null,
        ];
    }
}
