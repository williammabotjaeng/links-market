<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // User's name
            $table->string('email')->unique(); // User's email, must be unique
            $table->string('password'); // User's password
            $table->string('paypal_email')->nullable(); // PayPal email
            $table->string('phone_number')->nullable(); // Phone number
            $table->string('skype_id')->nullable(); // Skype ID
            $table->string('whatsapp_number')->nullable(); // WhatsApp number
            $table->string('website')->nullable(); // User's website
            $table->text('bio')->nullable(); // User's bio
            $table->json('social_media_links')->nullable(); // JSON for social media links
            $table->string('profile_picture')->nullable(); // Profile picture URL
            $table->decimal('advertising_budget', 10, 2)->default(0.00); // Advertising budget
            $table->json('preferred_ad_types')->nullable(); // JSON for preferred ad types
            $table->json('notification_methods')->nullable(); // JSON for notification methods
            $table->boolean('text_msg_opt_in')->default(false); // Opt-in for text messages
            $table->json('roles')->nullable(); // JSON for user roles
            $table->string('current_role')->nullable(); // Current role of the user
            $table->timestamp('email_verified_at')->nullable(); // Email verification timestamp
            $table->rememberToken(); // Token for "remember me" functionality
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};