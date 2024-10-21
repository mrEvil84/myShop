<?php

declare(strict_types=1);

namespace App\src\MyShopUsers\ReadModel;
use App\Models\ShopUser;
use Illuminate\Database\Eloquent\Collection;

class MyShopUsersReadModel
{
    public function __construct(private readonly MyShopUsersReadModelRepository $repository) {
    }

    /**
     * @return ShopUser[]
     */
    public function getUsersWithLatestPurchases(): array
    {
        $users = $this->repository->getAllShopUsers();

        $usersWithLastPurchaseDate = [];
        foreach ($users as $user) {
            $lastPurchases = $user->latestPurchase()->get('purchase_date');

            if ($lastPurchases->count() > 0) {
                $usersWithLastPurchaseDate [] = $user;
            }
        }

        return $usersWithLastPurchaseDate;
    }

    /**
     * @return ShopUser[]
     */
    public function getUsersSortedByBirthDate(): array
    {
        return $this->getMyShopUsersCollection(
            $this->repository->getShopUsersSortedByBirthDate()
        );
    }

    /**
     * @return ShopUser[]
     */
    public function getUsersWithBirthdayInCurrentWeek(): array
    {
        return $this->getMyShopUsersCollection(
            $this->repository->getShopUsersWithBirthdayInCurrentWeek()
        );
    }

    private function getMyShopUsersCollection(Collection $users): array
    {
        $shopUsers = [];
        foreach ($users as $user) {
            $shopUsers[] = $user;
        }
        return $shopUsers;
    }
}
