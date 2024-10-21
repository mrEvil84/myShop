<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ShopPurchase;
use Illuminate\Database\Seeder;

class ShopPurchaseSeeder extends Seeder
{
    public function run(): void
    {
        ShopPurchase::factory()->count(50)->create();
    }
}
