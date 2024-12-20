<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $fillable = [
        'platform',
        'account_handle',
        'impressions',
        'likes',
        'followers',
        'follows',
        'posts',
        'engagement_rate',
        'average_views', 
        'shares', 
        'comments', 
        'video_views', 
        'reach', 
        'link_clicks', 
        'retweets', 
        'profile_visits', 
        'photo_tags',
        'mentions', 
        'audience_demographics', 
        'top_interests', 
        'follower_growth_rate', 
        'engagement_by_post_type',
        'tweet_activity', 
        'post_activity',
    ];
}