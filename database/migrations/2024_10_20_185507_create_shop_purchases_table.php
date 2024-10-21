<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shop_purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shop_user_id')->constrained('shop_users');
            $table->timestamp('purchase_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shop_purchases');
    }
};
