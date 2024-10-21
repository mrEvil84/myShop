<?php

declare(strict_types=1);

namespace Tests\Unit\MyShopUsers\ReadModel;

use App\Models\ShopPurchase;
use App\Models\ShopUser;
use App\src\MyShopUsers\ReadModel\MyShopUsersReadModel;
use App\src\MyShopUsers\ReadModel\MyShopUsersReadModelRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasOne;
use PHPUnit\Framework\TestCase;

class MyShopUsersReadModelTest extends TestCase
{
    public function test_get_users_with_latest_purchases(): void
    {
        $purchases = new Collection([
            new ShopPurchase([]),
            new ShopPurchase([]),
            new ShopPurchase([]),
        ]);

        $hasOne = $this->createMock(HasOne::class);
        $hasOne->expects(self::once())->method('get')->willReturn($purchases);

        $shopUserWithPurchase = $this->createMock(ShopUser::class);
        $shopUserWithPurchase->expects($this->once())->method('latestPurchase')->willReturn($hasOne);

        $usersCollection = new Collection([$shopUserWithPurchase]);

        $repositoryMock = $this->createMock(MyShopUsersReadModelRepository::class);
        $repositoryMock->expects($this->once())->method('getAllShopUsers')->willReturn($usersCollection);

        $sut = new MyShopUsersReadModel($repositoryMock);
        $result = $sut->getUsersWithLatestPurchases();

        $this->assertEquals(1, count($result));
    }
}
