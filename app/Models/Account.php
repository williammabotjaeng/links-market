<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    use HasFactory;

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'user_id',          
        'balance',          
        'bonus',            
        'reserved',         
        'escrow',           
        'billing_address',  
        'payment_options',  
        'withdrawable_balance', 
        'created_at',       
        'updated_at',       
    ];

    protected $casts = [
        'payment_options' => 'array',
    ];

    /**
     * Get the user that owns the account.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Calculate the available balance for withdrawal.
     *
     * @return float
     */
    public function calculateWithdrawableBalance(): float
    {
        // The withdrawable balance can be the total balance minus reserved and escrow amounts
        return $this->balance - $this->reserved - $this->escrow;
    }

    /**
     * Request a withdrawal of a specified amount.
     *
     * @param float $amount
     * @return string
     */
    public function requestWithdrawal(float $amount): string
    {
        $this->withdrawable_balance = $this->calculateWithdrawableBalance();

        if ($amount > $this->withdrawable_balance) {
            return "Insufficient funds available for withdrawal.";
        }

        // Here you would typically handle the withdrawal process (e.g., update balances, log the transaction)
        $this->balance -= $amount; 
        $this->withdrawable_balance -= $amount; 
        $this->save(); 

        return "Withdrawal of $amount has been processed successfully.";
    }
}