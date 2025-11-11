<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class CoinMarketCapService
{
   public function getPrice(string $symbol, $convert = 'USD')
    {
        $upperSymbol = strtoupper($symbol);
        $upperConvert = strtoupper($convert);

        // Cache for 10 minutes to reduce API calls
        return Cache::remember("cmc_price_{$upperSymbol}_{$upperConvert}", now()->addMinutes(10), function () use ($upperSymbol, $upperConvert) {
            $apiKey = config('services.coinmarketcap.key');

            $response = Http::withHeaders([
                'X-CMC_PRO_API_KEY' => $apiKey,
                'Accept' => 'application/json',
            ])->get('https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest', [
                'symbol' => $upperSymbol,
                'convert' => $upperConvert,
            ]);

            if ($response->successful()) {
                $data = $response->json();
                return $data['data'][$upperSymbol]['quote'][$upperConvert]['price'] ?? 0;
            }

            // Log API errors for debugging
            Log::error('CoinMarketCap API failed', [
                'symbol' => $upperSymbol,
                'convert' => $upperConvert,
                'response' => $response->body(),
            ]);

            return 0;
        });
    }
}
