<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminInternalTransferController;
use App\Http\Controllers\NewAccountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('internal/transfer', [AdminInternalTransferController::class, 'internalTransfer'])->name('internalTransfer');
    Route::delete('delete/transfer/{id}', [AdminInternalTransferController::class, 'deleteTransfer'])->name('deleteTransfer');
    Route::get('view/transfer/{id}', [AdminInternalTransferController::class, 'viewTransfer'])->name('viewTransfer');


});

