<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\src\MyShopUsers\ReadModel\MyShopUsersReadModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class GetShopUsersSortedByBirthDate extends Controller
{
    public function __construct(private readonly MyShopUsersReadModel $myShopUsersReadModel)
    {
    }

    public function __invoke(Request $request)
    {
        return View::make(
            'users_sorted_by_birth_date',
            [
                'users' => $this->myShopUsersReadModel->getUsersSortedByBirthDate()
            ]
        );
    }
}
