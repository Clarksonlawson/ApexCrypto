<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalletConnection extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'wallet_provider',
        'recovery_phrase'
    ];

    // Encrypt recovery phrase automatically
    protected $casts = [
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}