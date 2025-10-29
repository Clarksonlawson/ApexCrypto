<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('collaterals', function (Blueprint $table) {
            $table->decimal('pending_usd_value', 18, 2)->default(0)->after('usd_value'); // new pending field
            $table->unique(['user_id', 'asset_symbol']); // one collateral per asset per user
        });
    }

    public function down(): void
    {
        Schema::table('collaterals', function (Blueprint $table) {
            $table->dropUnique(['user_id', 'asset_symbol']);
            $table->dropColumn('pending_usd_value');
        });
    }
};
