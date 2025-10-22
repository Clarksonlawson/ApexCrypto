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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->index();

            // Loan metadata
            $table->string('loan_id')->unique()->index(); // e.g. LN-001234
            $table->string('status')->default('Pending'); // Active, Completed, Defaulted, Pending Approval

            // Financials
            $table->decimal('amount_usd', 15, 2)->default(0); // Total loan amount in USD
            $table->decimal('collateral_btc', 16, 8)->default(0); // BTC held as collateral
            $table->decimal('ltv', 5, 2)->default(0); // Loan-to-value percentage
            $table->decimal('interest_rate', 5, 2)->default(0); // % annual interest

            // Crypto asset details
            $table->string('ticker', 10)->default('BTC'); // e.g. BTC, ETH, SOL
            $table->string('collateral_wallet_address')->nullable(); // optional wallet address

            // Timestamps for activity
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            // Optional tracking / system info
            $table->string('account_number')->nullable();
            $table->timestamps();
            $table->foreign('user_email')
            ->references('email')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
