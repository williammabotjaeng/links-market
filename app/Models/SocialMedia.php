<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'platform', 
        'account_name', 
        'followers_count',
        'engagement_rate', 
        'bio',
        'profile_picture', 
        'last_posted_at',
        'created_at',
        'updated_at', 
    ];

    /**
     * Get the user that owns the social media account.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}