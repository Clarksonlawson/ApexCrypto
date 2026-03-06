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
        Schema::table('users', function (Blueprint $table) {
             // Available balance user can withdraw
            $table->decimal('account_balance', 15, 2)->default(0)->after('password');

            // Total profit earned
            $table->decimal('total_profit', 15, 2)->default(0);

            // Total deposited amount
            $table->decimal('total_deposit', 15, 2)->default(0);

            // Total withdrawn amount
            $table->decimal('total_withdrawal', 15, 2)->default(0);

            // Bonus balance
            $table->decimal('bonus', 15, 2)->default(0);
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'account_balance',
                'total_profit',
                'total_deposit',
                'total_withdrawal',
                'bonus'
            ]);
        });
    }
};
