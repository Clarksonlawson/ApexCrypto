<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collateral extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'loan_id',
        'asset_symbol',
        'asset_name',
        'amount',
        'usd_value',
        'wallet_address',
        'network',
        'status',
    ];

    /**
     * Define relationship: a collateral belongs to a specific user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Define relationship: a collateral may belong to a loan.
     */
    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    /**
     * Accessor to display the USD value formatted.
     */
    public function getUsdValueFormattedAttribute()
    {
        return '$' . number_format($this->usd_value, 2);
    }

    /**
     * Accessor to display a short wallet address (for UI readability).
     */
    public function getShortWalletAttribute()
    {
        if (strlen($this->wallet_address) <= 12) {
            return $this->wallet_address;
        }

        return substr($this->wallet_address, 0, 6) . '...' . substr($this->wallet_address, -4);
    }

    /**
     * Scope for filtering active collaterals.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public static function getTotalUsdValueByUser($userId)
{
    return static::where('user_id', $userId)->where('status', 'active')->sum('usd_value');
}

}
