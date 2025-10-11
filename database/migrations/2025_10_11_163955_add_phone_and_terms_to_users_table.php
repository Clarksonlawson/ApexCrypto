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
            // Add phone fields if they don't exist
            if (!Schema::hasColumn('users', 'phone')) {
                $table->string('phone')->nullable()->after('email');
            }

            if (!Schema::hasColumn('users', 'full_phone')) {
                $table->string('full_phone')->nullable()->after('phone');
            }

            // Optional: store whether user accepted terms
            if (!Schema::hasColumn('users', 'accepted_terms')) {
                $table->boolean('accepted_terms')->default(false)->after('password');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['phone', 'full_phone', 'accepted_terms']);
        });
        });
    }
};
