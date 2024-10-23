<?php

namespace Database\Factories;

use App\Models\ShopPurchase;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ShopPurchase>
 */
class ShopPurchaseFactory extends Factory
{
    protected $model = ShopPurchase::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        return [
            'shop_user_id' => $faker->numberBetween(1, 10),
            'purchase_date' => $faker->dateTimeThisYear(),
        ];
    }
}
