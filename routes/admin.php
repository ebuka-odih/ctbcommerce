<?php

use App\Http\Controllers\Admin\AdminController;
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

    Route::get('transfer', [AdminTransferController::class, 'transfers'])->name('transfer');
    Route::delete('delete/transfer/{id}', [AdminTransferController::class, 'deleteTransfer'])->name('deleteTransfer');
    Route::get('view/transfer/{id}', [AdminTransferController::class, 'viewTransfer'])->name('viewTransfer');


});

