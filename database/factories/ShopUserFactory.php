<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\ShopUser;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopUser>
 */
class ShopUserFactory extends Factory
{
    protected $model = ShopUser::class;

    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        return [
            'birth_date' => Carbon::createFromFormat('Y-m-d', $faker->date('Y-m-d', '-10 year')),
        ];
    }
}
