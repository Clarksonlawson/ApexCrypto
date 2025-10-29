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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('asset_symbol');              // e.g., BTC, ETH
            $table->string('network')->nullable();       // e.g., Bitcoin, Ethereum
            $table->decimal('usd_value', 18, 2);         // USD equivalent
            $table->decimal('crypto_amount', 24, 10)->nullable(); // optional raw crypto amount
            $table->string('transaction_type');          // e.g., "collateral_deposit", "withdrawal"
            $table->string('proof_of_deposit')->nullable(); // file path to uploaded proof
            $table->text('description')->nullable();     // optional note
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
