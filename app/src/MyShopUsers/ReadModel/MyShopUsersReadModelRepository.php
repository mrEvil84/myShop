<?php

declare(strict_types=1);

namespace App\src\MyShopUsers\ReadModel;

use Illuminate\Database\Eloquent\Collection;

interface MyShopUsersReadModelRepository
{
    public function getAllShopUsers(): Collection;

    public function getShopUsersSortedByBirthDate(): Collection;

    public function getShopUsersWithBirthdayInCurrentWeek(): Collection;
}
