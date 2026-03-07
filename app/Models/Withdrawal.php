<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'method',
        'account',
        'bank_name',
        'account_name',
        'reference_id',
        'status',
        'admin_note',
        'processed_at'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'processed_at' => 'datetime'
    ];

    /**
     * Relationship with user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}