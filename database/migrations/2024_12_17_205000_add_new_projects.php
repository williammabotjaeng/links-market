<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->string('name'); 
            $table->text('description')->nullable();
            $table->decimal('budget', 10, 2)->default(0.00); 
            $table->date('start_date')->nullable(); 
            $table->date('end_date')->nullable(); 
            $table->string('status')->default('active'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};