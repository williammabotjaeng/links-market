<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contact_info',
        'notification_settings',
        'billing_details',
        'tax_form',
        'profile_activity',
    ];

    protected $casts = [
        'contact_info' => 'array',
        'notification_settings' => 'array',
        'billing_details' => 'array',
        'profile_activity' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}