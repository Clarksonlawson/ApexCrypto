<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // references users table
            $table->foreignId('plan_id')->constrained('investment_plans')->onDelete('cascade'); // now correctly references investment_plans
            $table->decimal('amount', 15, 2);
            $table->string('status')->default('pending'); // pending, active, completed
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('investments');
    }
};