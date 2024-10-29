<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\src\MyShopUsers\ReadModel\MyShopUsersReadModel;
use Illuminate\Contracts\View\View as ViewResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class GetShopUsersWithBirthdayInCurrentWeek extends Controller
{
    public function __construct(private readonly MyShopUsersReadModel $myShopUsersReadModel)
    {
    }

    public function __invoke(Request $request): ViewResponse
    {
        return View::make(
            'users_with_birthday_in_current_week',
            [
                'users' => $this->myShopUsersReadModel->getUsersWithBirthdayInCurrentWeek()
            ]
        );
    }
}
