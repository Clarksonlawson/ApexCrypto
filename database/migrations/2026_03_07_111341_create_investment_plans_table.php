<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('investment_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('min_investment', 15, 2);
            $table->decimal('max_investment', 15, 2);
            $table->decimal('return_rate', 8, 2); // e.g., 80 for 80%
            $table->string('duration'); // e.g., "10 Minutes", "60 Days"
            $table->string('roi_type')->default('percentage'); // optional: percentage/daily/etc
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('investment_plans');
    }
};