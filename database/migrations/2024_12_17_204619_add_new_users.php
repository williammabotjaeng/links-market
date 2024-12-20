<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->string('name');
            $table->string('email')->unique(); 
            $table->string('password');
            $table->string('paypal_email')->nullable(); 
            $table->string('phone_number')->nullable(); 
            $table->string('skype_id')->nullable(); 
            $table->string('whatsapp_number')->nullable(); 
            $table->string('website')->nullable(); 
            $table->text('bio')->nullable(); 
            $table->json('social_media_links')->nullable(); 
            $table->string('profile_picture')->nullable(); 
            $table->decimal('advertising_budget', 10, 2)->default(0.00);
            $table->json('preferred_ad_types')->nullable(); 
            $table->json('notification_methods')->nullable(); 
            $table->boolean('text_msg_opt_in')->default(false); 
            $table->string('roles')->nullable(); 
            $table->string('current_role')->nullable(); 
            $table->timestamp('email_verified_at')->nullable(); 
            $table->rememberToken(); 
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};