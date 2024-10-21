<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop-users-with-last-purchase-date', \App\Http\Controllers\GetShopUsersWithLastPurchaseDate::class);
Route::get('/shop-users-sorted-by-birthdate', \App\Http\Controllers\GetShopUsersSortedByBirthDate::class);
Route::get('/shop-users-with-birthday-in-current-week', \App\Http\Controllers\GetShopUsersWithBirthdayInCurrentWeek::class);
