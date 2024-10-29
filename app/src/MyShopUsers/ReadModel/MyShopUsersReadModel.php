<?php

declare(strict_types=1);

namespace App\src\MyShopUsers\ReadModel;

readonly class MyShopUsersReadModel
{
    public function __construct(private MyShopUsersReadModelRepository $repository)
    {
    }

    public function getUsersWithLatestPurchases(): array
    {
        return $this->repository->findUsersWithLastPurchaseDate();
    }

    public function getUsersSortedByBirthDate(): array
    {
        return $this->repository->getShopUsersSortedByBirthDate();
    }

    public function getUsersWithBirthdayInCurrentWeek(): array
    {
        return $this->repository->getShopUsersWithBirthdayInCurrentWeek();
    }
}
