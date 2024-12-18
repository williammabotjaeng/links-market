<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Referral extends Model
{
    use HasFactory;

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'referrer_id',      // Foreign key for the user who made the referral
        'referred_email',   // Email of the referred user
        'commission_rate',   // Commission rate for the referral (e.g., 10%)
        'total_spent',      // Total amount spent by the referred user
        'commission_earned', // Total commission earned from the referred user
        'status',           // Status of the referral (e.g., active, inactive)
        'created_at',       // Timestamp for when the referral was created
        'updated_at',       // Timestamp for when the referral was last updated
    ];

    /**
     * Get the user that referred the new user.
     */
    public function referrer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'referrer_id');
    }
}
