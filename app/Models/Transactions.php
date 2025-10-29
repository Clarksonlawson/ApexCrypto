<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'asset_symbol',
        'network',
        'usd_value',
        'crypto_amount',
        'transaction_type',
        'proof_of_deposit',
        'description',
        'status',
    ];
}
