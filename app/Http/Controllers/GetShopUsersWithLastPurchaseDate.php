<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\src\MyShopUsers\ReadModel\MyShopUsersReadModel;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

readonly class GetShopUsersWithLastPurchaseDate
{
    public function __construct(private MyShopUsersReadModel $myShopUsersReadModel)
    {
    }

    public function __invoke(Request $request): ViewResponse
    {
        $users = $this->myShopUsersReadModel->getUsersWithLatestPurchases();

        return View::make('users_with_last_purchase_date', ['users' => $users]);
    }
}
