<?php

use App\Http\Controllers\Setting\CompanyController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
});


Route::get('/settings/company', [CompanyController::class, 'index'])->name('settings.company');
Route::put('/settings/company/update', [CompanyController::class, 'update'])->name('settings.company.update');
Route::resource('settings', SettingController::class);
