<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('admins', function (Blueprint $table) {
            // Wallet addresses
            $table->string('usdt_address')->nullable();
            $table->string('btc_address')->nullable();
            $table->string('eth_address')->nullable();
            $table->string('litecoin_address')->nullable();
            $table->string('solana_address')->nullable();
            $table->string('bnb_address')->nullable();
            $table->string('xrp_address')->nullable();

            // Wallet images
            $table->string('usdt_image')->nullable();
            $table->string('btc_image')->nullable();
            $table->string('eth_image')->nullable();
            $table->string('litecoin_image')->nullable();
            $table->string('solana_image')->nullable();
            $table->string('bnb_image')->nullable();
            $table->string('xrp_image')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn([
                'usdt_address', 'btc_address', 'eth_address', 'litecoin_address',
                'solana_address', 'bnb_address', 'xrp_address',
                'usdt_image', 'btc_image', 'eth_image', 'litecoin_image',
                'solana_image', 'bnb_image', 'xrp_image'
            ]);
        });
    }
};

