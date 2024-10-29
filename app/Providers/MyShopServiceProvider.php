<?php

declare(strict_types=1);

namespace App\Providers;

use App\src\MyShopUsers\Infrastructure\MyShopUsersReadModelDbRepository;
use App\src\MyShopUsers\ReadModel\MyShopUsersReadModelRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class MyShopServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(MyShopUsersReadModelRepository::class, MyShopUsersReadModelDbRepository::class);

        $this->app->singleton(MyShopUsersReadModelDbRepository::class, function ($app) {
            return new MyShopUsersReadModelDbRepository(
                DB::connection()
            );
        });
    }

    public function boot(): void
    {
    }
}
