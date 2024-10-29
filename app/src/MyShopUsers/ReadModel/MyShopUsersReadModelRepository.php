<?php

declare(strict_types=1);

namespace App\src\MyShopUsers\ReadModel;

interface MyShopUsersReadModelRepository
{
    public function findUsersWithLastPurchaseDate(): array;

    public function getShopUsersSortedByBirthDate(): array;

    public function getShopUsersWithBirthdayInCurrentWeek(): array;
}
