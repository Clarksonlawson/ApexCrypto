<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('collaterals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')
                ->constrained()
                ->onDelete('cascade');
            $table->string('asset_symbol', 10);   // e.g. BTC, ETH, USDT
            $table->string('asset_name', 50);     // e.g. Bitcoin, Ethereum
            $table->decimal('amount', 18, 8);     // crypto amount (fractional)
            $table->decimal('usd_value', 18, 2);  // current valuation in USD

            // Wallet information
            $table->string('wallet_address', 255)->nullable();  // user or escrow wallet
            $table->string('network', 50)->default('Bitcoin'); // e.g. Bitcoin, Binance Smart Chain, Polygon

            // Status of collateral
            $table->enum('status', [
                'active',
                'locked',
                'released',
                'liquidated'
            ])->default('active');

            $table->unsignedBigInteger('loan_id')->nullable();
            $table->foreign('loan_id')->references('id')->on('loans')->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collaterals');
    }
};
