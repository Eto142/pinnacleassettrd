<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();                          // Primary key
            $table->string('name');                // Admin name
            $table->string('email')->unique();    // Email, unique
            $table->timestamp('email_verified_at')->nullable(); // Optional email verified
            $table->string('password');            // Password
            $table->rememberToken();               // For "remember me"
            $table->timestamps();                  // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
}

