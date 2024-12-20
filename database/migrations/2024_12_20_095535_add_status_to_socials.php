<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

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
        'status', 
    ];
};
