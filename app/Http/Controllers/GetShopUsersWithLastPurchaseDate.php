<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\src\MyShopUsers\ReadModel\MyShopUsersReadModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class GetShopUsersWithLastPurchaseDate extends Controller
{
    public function __construct(private readonly MyShopUsersReadModel $myShopUsersReadModel)
    {
    }

    public function __invoke(Request $request)
    {
        $users = $this->myShopUsersReadModel->getUsersWithLatestPurchases();

        return View::make('users_with_last_purchase_date', ['users' => $users]);
    }
}
