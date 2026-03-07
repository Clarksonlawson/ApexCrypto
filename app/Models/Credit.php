<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'duration',
        'monthly_payment',
        'facility',
        'income',
        'purpose',
        'accepted_terms',
        'status',
    ];

    // Link to User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}