<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bot_histories', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id')->nullable(); // Assuming users login
        $table->string('bot_id');
        $table->string('bot_name');
        $table->string('image')->nullable();
        $table->string('category');
        $table->string('price');
        $table->string('rating');
        $table->string('level');
        $table->string('processed');
        $table->string('active_connections');
        $table->string('percentage_rating');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bot_histories');
    }
};
