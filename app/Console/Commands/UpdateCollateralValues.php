<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Collateral;
use App\Models\SystemCollateral;
use App\Services\CoinMarketCapService;
use Illuminate\Support\Facades\Log;

class UpdateCollateralValues extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'collaterals:update-values';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update USD values of all collaterals using current crypto prices';

    /**
     * Execute the console command.
     */
    public function handle(CoinMarketCapService $coinMarketCap)
    {
        $this->info('Updating collateral USD values...');

        $collaterals = SystemCollateral::all();

        foreach ($collaterals as $collateral) {
            $symbol = strtoupper($collateral->symbol);

            $price = $coinMarketCap->getPrice($symbol, 'USD');
            if ($price <= 0) {
                $this->warn("⚠️ Could not fetch price for {$symbol}");
                continue;
            }

            //$usdValue = $collateral->amount * $price;
            $collateral->update(['usd_value' => $price]);

            $this->info("✅ Updated {$symbol}: $" . number_format($price, 2));
        }

        $this->info('All collaterals updated successfully!');

        $this->info('Updating user asset prices');
    }
}
