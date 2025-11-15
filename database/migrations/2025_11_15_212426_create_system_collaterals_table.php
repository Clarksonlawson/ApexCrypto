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
        Schema::create('system_collaterals', function (Blueprint $table) {
            $table->id();
            $table->string('collaterals');
            $table->decimal('usd_value', 20, 8);
            $table->string('wallet_address');
            $table->string('symbol');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('system_collaterals');
    }
};
