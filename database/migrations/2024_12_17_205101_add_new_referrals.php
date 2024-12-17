<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('referrals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->string('referred_email'); 
            $table->decimal('commission_rate', 5, 2)->default(10.00); 
            $table->decimal('total_spent', 10, 2)->default(0.00); 
            $table->decimal('commission_earned', 10, 2)->default(0.00); 
            $table->string('status')->default('active'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('referrals');
    }
};