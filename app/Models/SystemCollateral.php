<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemCollateral extends Model
{
    protected $fillable = [
        'collaterals',
        'usd_value',
        'wallet_address',
        'symbol',
    ];
}
