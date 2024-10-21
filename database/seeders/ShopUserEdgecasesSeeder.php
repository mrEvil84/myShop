<?php

declare(strict_types=1);

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopUserEdgecasesSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('shop_users')->insert([
            [
                'id' => 11,
                'birth_date' => $this->getCurrentWeekBirthDate(1995),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 12,
                'birth_date' => $this->getCurrentWeekBirthDate(2000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);

    }

    private function getCurrentWeekBirthDate(int $year): Carbon
    {
        $now = Carbon::now();
        $rawDate = $year .'-'. $now->startOf('week')->format('m-d');
        return Carbon::createFromFormat('Y-m-d', $rawDate);
    }
}


