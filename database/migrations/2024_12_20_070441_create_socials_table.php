<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('platform');
            $table->string('account_handle');
            $table->bigInteger('impressions')->nullable();
            $table->bigInteger('likes')->nullable();
            $table->bigInteger('followers')->nullable();
            $table->bigInteger('follows')->nullable();
            $table->bigInteger('posts')->nullable();
            $table->float('engagement_rate')->nullable();
            $table->bigInteger('average_views')->nullable();
            $table->bigInteger('shares')->nullable();
            $table->bigInteger('comments')->nullable();
            $table->bigInteger('video_views')->nullable();
            $table->bigInteger('reach')->nullable();
            $table->bigInteger('link_clicks')->nullable();
            $table->bigInteger('retweets')->nullable();
            $table->bigInteger('profile_visits')->nullable();
            $table->bigInteger('photo_tags')->nullable();
            $table->bigInteger('mentions')->nullable();
            $table->json('audience_demographics')->nullable();
            $table->json('top_interests')->nullable();
            $table->float('follower_growth_rate')->nullable();
            $table->json('engagement_by_post_type')->nullable();
            $table->json('tweet_activity')->nullable();
            $table->json('post_activity')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('socials');
    }
};