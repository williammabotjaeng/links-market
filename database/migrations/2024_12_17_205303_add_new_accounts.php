<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->decimal('balance', 10, 2)->default(0.00); 
            $table->decimal('bonus', 10, 2)->default(0.00); 
            $table->decimal('reserved', 10, 2)->default(0.00); 
            $table->decimal('escrow', 10, 2)->default(0.00); 
            $table->string('billing_address')->nullable();
            $table->json('payment_options')->nullable(); 
            $table->decimal('withdrawable_balance', 10, 2)->default(0.00); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};