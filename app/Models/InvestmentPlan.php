<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'min_investment',
        'max_investment',
        'return_rate',
        'duration',
        'roi_type',
    ];
}