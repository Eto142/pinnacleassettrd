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
        Schema::create('bots', function (Blueprint $table) {
            $table->id();
            $table->string('bot_id')->unique(); // or use UUID
            $table->string('name');
            $table->string('category');
            $table->string('image')->nullable();
            $table->string('processed')->nullable();
            $table->string('active_connections')->nullable();
            $table->string('rating')->nullable(); // e.g. 4.50
            $table->string('percentage_rating')->nullable(); // e.g. 87.50%
            $table->string('action')->nullable(); // or use JSON if structured
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bots');
    }
};
