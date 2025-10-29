<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Models\Collateral;

class Loan extends Model
{
    use HasFactory;

    protected $table = 'loans';
    protected $primaryKey = 'id';

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

    protected $casts = [
        'amount_usd'     => 'float',
        'btc_collateral' => 'float',
        'interest_rate'  => 'float',
        'ltv_ratio'      => 'float',
        'start_date'     => 'datetime',
        'end_date'       => 'datetime',
    ];

    /* -------------------------
     |  ACCESSORS & UTILITIES
     --------------------------*/

    public function getFormattedAmountUsdAttribute()
    {
        return '$' . number_format($this->amount_usd, 2);
    }

    public function getFormattedBtcCollateralAttribute()
    {
        return number_format($this->btc_collateral, 8) . ' BTC';
    }

    public function getDurationDaysAttribute()
    {
        if ($this->start_date && $this->end_date) {
            return Carbon::parse($this->start_date)->diffInDays($this->end_date) . ' days';
        }
        return '—';
    }

    public function getFormattedStartDateAttribute()
    {
        return $this->start_date ? Carbon::parse($this->start_date)->format('M j, Y') : '—';
    }

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

    /**
     * Calculate total active loan amount for a user.
     */
    public static function getTotalActiveLoans($email)
    {
        return static::where('user_email', $email)
            ->where('status', 'active loan')
            ->sum('amount_usd');
    }

    /* -------------------------
     |  LTV / ELIGIBILITY LOGIC
     --------------------------*/

    /**
     * Calculates how much the user is eligible to borrow based on their active collaterals.
     * LTV ratio: 10%
     */
    public static function calculateEligibility($user_id)
    {
        $activeCollateralValue = Collateral::where('user_id', $user_id)
            ->where('status', 'active')
            ->sum('usd_value');

        $ltv = 0.70; // create the database value for this.
        
        $eligible = $activeCollateralValue * $ltv;
       
        $min = 5000; // get the value from the db
        $max = 2000000; // get the value from the db

        return max($min, min($eligible, $max));
    }

    /**
     * Automatically determine required collateral for a given loan amount (10% rule reversed).
     */
    public static function requiredCollateralForLoan($loanAmount)
    {
        $ltv = 0.10; // 10%
        return $loanAmount / $ltv;
    }

    /**
     * Relationship: Loan belongs to a user (via email instead of id).
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_email', 'email');
    }
}
