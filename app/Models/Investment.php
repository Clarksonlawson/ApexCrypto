<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;

    // Fillable fields for mass assignment
    protected $fillable = [
        'user_id',
        'plan_id',
        'amount',
        'status',
        'started_at',
    ];

    // Optional: cast date fields
    protected $dates = [
        'started_at',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plan()
    {
        return $this->belongsTo(InvestmentPlan::class, 'plan_id');
    }
}