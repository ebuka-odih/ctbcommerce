<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AdminAddFundController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminDebitCardController;
use App\Http\Controllers\Admin\AdminInternalTransferController;
use App\Http\Controllers\Admin\AdminTransferController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\NewAccountController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('users', [UserController::class, 'users'])->name('users');
    Route::get('user/detail/{id}', [UserController::class, 'viewUser'])->name('viewUser');
    Route::delete('delete/user/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
    Route::get('user/setting/{id}', [UserController::class, 'userSetting'])->name('userSetting');
    Route::post('user/setting', [UserController::class, 'storeUserSetting'])->name('storeUserSetting');

    Route::get('add/user/', [AccountController::class, 'createAccount'])->name('createAccount');
    Route::post('add/user/', [AccountController::class, 'storeAccount'])->name('storeAccount');
    Route::get('account/setup/{id}', [AccountController::class, 'accountSetup'])->name('accountSetup');
    Route::post('account/setup/{id}', [AccountController::class, 'storeAccountSetup'])->name('storeAccountSetup');

    Route::get('transfer', [AdminTransferController::class, 'transfers'])->name('transfer');
    Route::post('send/first/code', [AdminTransferController::class, 'adminFirstCode'])->name('adminFirstCode');
    Route::post('send/second/code/', [AdminTransferController::class, 'adminSecondCode'])->name('adminSecondCode');
    Route::post('send/third/code/', [AdminTransferController::class, 'adminThirdCode'])->name('adminThirdCode');
    Route::delete('delete/transfer/{id}', [AdminTransferController::class, 'deleteTransfer'])->name('deleteTransfer');
    Route::get('view/transfer/{id}', [AdminTransferController::class, 'viewTransfer'])->name('viewTransfer');

    //    Cards Route
    Route::get('cards', [AdminDebitCardController::class, 'cards'])->name('cards');
    Route::get('approveCard', [AdminDebitCardController::class, 'approveCard'])->name('approveCard');
    Route::delete('delete/card/{id}', [AdminDebitCardController::class, 'deleteCard'])->name('deleteCard');

    //  Password Route
    Route::get('security', [AdminController::class, 'password'])->name('password');
    Route::post('storePassword', [AdminController::class, 'storePassword'])->name('storePassword');

    Route::get('add/fund', [AdminAddFundController::class, 'addFund'])->name('addFund');
    Route::post('add/fund', [AdminAddFundController::class, 'storeDeposit'])->name('storeDeposit');
    Route::delete('delete/fund', [AdminAddFundController::class, 'deleteDeposit'])->name('deleteDeposit');
});

