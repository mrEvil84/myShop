<?php

declare(strict_types=1);

namespace App\Providers;

use App\src\MyShopUsers\Infrastructure\MyShopUsersReadModelDbRepository;
use App\src\MyShopUsers\ReadModel\MyShopUsersReadModelRepository;
use Illuminate\Support\ServiceProvider;

class MyShopServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(MyShopUsersReadModelRepository::class, MyShopUsersReadModelDbRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
