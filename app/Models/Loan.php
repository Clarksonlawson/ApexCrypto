<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Loan extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     */
    protected $table = 'loans';

    /**
     * The primary key for the table.
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_email',
        'loan_id',
        'account_number',
        'status',
        'amount_usd',
        'btc_collateral',
        'interest_rate',
        'ltv_ratio',
        'start_date',
        'end_date',
        'ticker',
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [
        'amount_usd'     => 'float',
        'btc_collateral' => 'float',
        'interest_rate'  => 'float',
        'ltv_ratio'      => 'float',
        'start_date'     => 'datetime',
        'end_date'       => 'datetime',
    ];

    /**
     * Accessor to format USD amount nicely for display.
     */
    public function getFormattedAmountUsdAttribute()
    {
        return '$' . number_format($this->amount_usd, 2);
    }

    /**
     * Accessor to format BTC collateral to 8 decimal places.
     */
    public function getFormattedBtcCollateralAttribute()
    {
        return number_format($this->btc_collateral, 8) . ' BTC';
    }

    /**
     * Accessor to show the loan duration in days.
     */
    public function getDurationDaysAttribute()
    {
        if ($this->start_date && $this->end_date) {
            return Carbon::parse($this->start_date)->diffInDays($this->end_date) . ' days';
        }
        return '—';
    }

    /**
     * Accessor for a human-readable active date.
     */
    public function getFormattedStartDateAttribute()
    {
        return $this->start_date ? Carbon::parse($this->start_date)->format('M j, Y') : '—';
    }

    /**
     * Accessor for loan status badge styling (optional).
     */
    public function getStatusBadgeClassAttribute()
    {
        return match (strtolower($this->status)) {
            'active loan'       => 'bg-green-500 text-white',
            'pending approval'  => 'bg-yellow-500 text-white',
            'completed'         => 'bg-gray-500 text-white',
            'liquidated'        => 'bg-red-500 text-white',
            default             => 'bg-gray-400 text-white',
        };
    }
}
