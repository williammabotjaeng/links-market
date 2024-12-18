<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('client_id')->nullable()->constrained()->onDelete('set null'); 
            $table->foreignId('project_id')->nullable()->constrained()->onDelete('set null'); 
            $table->foreignId('website_id')->nullable()->constrained()->onDelete('set null'); 
            $table->foreignId('backlink_id')->nullable()->constrained()->onDelete('set null'); 
            $table->foreignId('account_id')->nullable()->constrained()->onDelete('set null'); 
            $table->string('title');
            $table->text('content'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
};