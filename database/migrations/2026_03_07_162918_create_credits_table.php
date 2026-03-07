<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Links to users table
            $table->decimal('amount', 12, 2);
            $table->integer('duration'); // in months
            $table->decimal('monthly_payment', 12, 2)->nullable();
            $table->string('facility');
            $table->string('income');
            $table->text('purpose');
            $table->boolean('accepted_terms')->default(false);
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('credits');
    }
};