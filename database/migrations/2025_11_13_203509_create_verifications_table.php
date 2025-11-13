<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');

            $table->string('occupation')->nullable();
            $table->string('job_title')->nullable();
            $table->string('languages')->nullable();

            $table->string('government_id')->nullable();
            $table->string('utility_bill')->nullable();
            $table->string('proof_of_address')->nullable();

            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('verifications');
    }
};
