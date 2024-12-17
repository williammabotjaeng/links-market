<?php 

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('social_media', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->string('platform'); 
            $table->string('account_name'); 
            $table->integer('followers_count')->default(0); 
            $table->decimal('engagement_rate', 5, 2)->nullable(); 
            $table->text('bio')->nullable(); 
            $table->string('profile_picture')->nullable(); 
            $table->timestamp('last_posted_at')->nullable(); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('social_media');
    }
};