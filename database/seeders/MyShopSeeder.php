<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MyShopSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(
            [
                ShopUserSeeder::class,
                ShopUserEdgecasesSeeder::class,
                ShopPurchaseSeeder::class,
            ]
        );

    }
}
