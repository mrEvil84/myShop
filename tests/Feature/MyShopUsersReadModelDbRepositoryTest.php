<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\src\MyShopUsers\Infrastructure\MyShopUsersReadModelDbRepository;
use Database\Seeders\ShopUserEdgecasesSeeder;
use Database\Seeders\ShopUserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MyShopUsersReadModelDbRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_all_shop_users(): void
    {
        $this->refreshDatabase();

        $this->seed([
            ShopUserSeeder::class,
            ShopUserEdgecasesSeeder::class,
        ]);

        $sut = new MyShopUsersReadModelDbRepository();
        $shopUsers = $sut->getAllShopUsers();
        $this->assertEquals(12, $shopUsers->count());
    }

    public function test_get_shop_users_with_birth_date_in_current_week(): void
    {
        $this->refreshDatabase();

        $this->seed([
            ShopUserSeeder::class,
            ShopUserEdgecasesSeeder::class,
        ]);

        $sut = new MyShopUsersReadModelDbRepository();
        $shopUsers = $sut->getShopUsersWithBirthdayInCurrentWeek();
        $this->assertEquals(2, $shopUsers->count());
    }

    public function test_get_shop_users_sorted_by_birthdate(): void
    {
        $this->refreshDatabase();

        $this->seed([
            ShopUserEdgecasesSeeder::class,
        ]);

        $sut = new MyShopUsersReadModelDbRepository();
        $shopUsers = $sut->getShopUsersSortedByBirthDate();

        $this->assertEquals(12, $shopUsers->first()->id);
        $this->assertEquals(11, $shopUsers->last()->id);
    }
}
