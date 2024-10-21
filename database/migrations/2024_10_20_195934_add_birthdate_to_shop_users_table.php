<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('shop_users', function (Blueprint $table) {
            $table->timestamp('birth_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('shop_users', function (Blueprint $table) {
            $table->dropColumn('birth_date');
        });
    }
};
