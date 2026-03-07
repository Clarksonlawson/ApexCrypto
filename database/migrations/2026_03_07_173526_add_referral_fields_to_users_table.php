<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('referred_by')->nullable();
            $table->decimal('referral_earnings', 12, 2)->default(0);
            $table->string('referral_level')->default('Starter');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'referral_code',
                'referred_by',
                'referral_earnings',
                'referral_level'
            ]);
        });
    }
};