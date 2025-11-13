<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verifications extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'occupation',
        'job_title',
        'languages',
        'government_id',
        'utility_bill',
        'proof_of_address',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
