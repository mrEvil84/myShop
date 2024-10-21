<?php

declare(strict_types=1);

namespace Tests\Feature;

use Database\Seeders\ShopUserEdgecasesSeeder;
use Database\Seeders\ShopUserSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MyShopsEndpointsTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed([
            ShopUserSeeder::class,
            ShopUserEdgecasesSeeder::class,
        ]);
    }

    public function test_successfull_response_shop_users_last_purchase_date(): void
    {
        $response = $this->get('/shop-users-with-last-purchase-date');
        $response->assertStatus(200);
    }

    public function test_successfull_response_shop_users_sorted_by_birthdate(): void
    {
        $response = $this->get('/shop-users-sorted-by-birthdate');
        $response->assertStatus(200);
    }

    public function test_successfull_response_shop_users_with_birthday_in_current_week(): void
    {
        $response = $this->get('/shop-users-with-birthday-in-current-week');
        $response->assertStatus(200);
    }
}
