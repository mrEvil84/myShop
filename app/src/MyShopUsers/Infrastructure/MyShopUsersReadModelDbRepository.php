<?php

namespace App\src\MyShopUsers\Infrastructure;

use App\Models\ShopUser;
use App\src\MyShopUsers\ReadModel\MyShopUsersReadModelRepository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class MyShopUsersReadModelDbRepository implements MyShopUsersReadModelRepository
{
    public function getAllShopUsers(): Collection
    {
        return ShopUser::all();
    }

    public function getShopUsersSortedByBirthDate(): Collection
    {
        return ShopUser::all()->sortBy('birth_date', SORT_REGULAR, true);
    }

    public function getShopUsersWithBirthdayInCurrentWeek(): Collection
    {
        return ShopUser::whereMonth('birth_date', '=', Carbon::now()->month)
            ->whereDay('birth_date', '>=', Carbon::now()->startOfWeek())
            ->whereDay('birth_date', '<=', Carbon::now()->endOfWeek())
            ->get();
    }
}
