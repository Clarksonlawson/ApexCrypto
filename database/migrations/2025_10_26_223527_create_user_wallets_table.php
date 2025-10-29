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
        Schema::create('user_wallets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->constrained()->onDelete('cascade');
            $table->string('asset_symbol', 10);   // BTC, ETH, etc.
            $table->string('network', 50)->default('Bitcoin'); // or Ethereum, BSC, etc.
            $table->string('wallet_address', 255)->unique();
            $table->timestamps();

            $table->unique(['user_id', 'asset_symbol', 'network']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_wallets');
    }
};
