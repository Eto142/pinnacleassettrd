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
         Schema::table('bots', function (Blueprint $table) {
        $table->string('price')->nullable()->after('rating'); // Optional: Replace 'column_name' with the column you want it to follow
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bots', function (Blueprint $table) {
              $table->dropColumn('price');
        });
    }
};
