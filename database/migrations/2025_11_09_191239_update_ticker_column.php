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
        Schema::table('loans', function(Blueprint $table){
            $table->string('asset', 30)->nullable()->after('ticker');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('loans', function(Blueprint $table){
            $table->dropColumn('asset');
        });
    }
};
