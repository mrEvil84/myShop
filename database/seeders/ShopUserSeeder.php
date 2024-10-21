<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ShopUser;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopUserSeeder extends Seeder
{

    public function run(): void
    {
        ShopUser::factory()->count(10)->create();

//        DB::table('shop_users')->insert([
//            [
//                'id' => 1,
//                'birth_date' => Carbon::createFromFormat('Y-m-d', '1980-01-01'),
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now(),
//            ],
//            [
//                'id' => 2,
//                'birth_date' => Carbon::createFromFormat('Y-m-d', '1984-10-17'),
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now(),
//            ],
//            [
//                'id' => 3,
//                'birth_date' => Carbon::createFromFormat('Y-m-d', '1990-11-12'),
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now(),
//            ],
//            [
//                'id' => 4,
//                'birth_date' => Carbon::createFromFormat('Y-m-d', '2000-05-12'),
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now(),
//            ],
//            [
//                'id' => 5,
//                'birth_date' => Carbon::createFromFormat('Y-m-d', '1991-06-18'),
//                'created_at' => Carbon::now(),
//                'updated_at' => Carbon::now(),
//            ],
//        ]);

    }
}
