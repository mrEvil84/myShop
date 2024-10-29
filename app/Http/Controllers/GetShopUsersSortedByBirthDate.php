<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\src\MyShopUsers\ReadModel\MyShopUsersReadModel;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

readonly class GetShopUsersSortedByBirthDate
{
    public function __construct(private MyShopUsersReadModel $myShopUsersReadModel)
    {
    }

    public function __invoke(Request $request): ViewResponse
    {
        return View::make(
            'users_sorted_by_birth_date',
            [
                'users' => $this->myShopUsersReadModel->getUsersSortedByBirthDate()
            ]
        );
    }
}
