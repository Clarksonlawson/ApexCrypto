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
         Schema::table('verifications', function (Blueprint $table) {
            $table->string('phone_number')->after('email');
            $table->date('dob')->after('phone_number');
            $table->string('social_media')->nullable()->after('dob');
            $table->string('address')->after('languages');
            $table->string('city')->after('address');
            $table->string('state')->after('city');
            $table->string('country')->after('state');
            $table->string('document_type')->after('country');
            $table->string('document_front')->nullable()->after('document_type');
            $table->string('document_back')->nullable()->after('document_front');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('verifications', function (Blueprint $table) {
            $table->dropColumn([
                'phone_number',
                'dob',
                'social_media',
                'address',
                'city',
                'state',
                'country',
                'document_type',
                'document_front',
                'document_back',
            ]);
        });
    }
};
