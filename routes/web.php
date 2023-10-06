<?php

use App\Http\Controllers\InternalTransferController;
use App\Http\Controllers\NewAccountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'pages.index')->name('index');
Route::get('signup/personal-info', [NewAccountController::class, 'personalInfo'])->name('personalInfo');
Route::post('signup/personal-info', [NewAccountController::class, 'storeAccountInfo'])->name('storeAccountInfo');
Route::get('account/setup/xd{id}3et64', [NewAccountController::class, 'accountSetup'])->name('accountSetup');
Route::post('account/setup/', [NewAccountController::class, 'storeAccountSetup'])->name('storeAccountSetup');
Route::get('account/terms-and-conditions/xd{id}3et64', [NewAccountController::class, 'terms'])->name('terms');
Route::get('account/review/xd{id}3et64', [NewAccountController::class, 'accountReview'])->name('accountReview');
Route::get('submit/details/xd{id}3et64', [NewAccountController::class, 'submitDetails'])->name('submitDetails');

Route::get('testing/{id}', [UserController::class, 'testing'])->name('testing');
Route::get('pending/{id}', [UserController::class, 'acctPending'])->name('acctPending');


Route::group(['middleware' => ['auth', 'active'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('transfer', [TransferController::class, 'transfer'])->name('transfer');
    Route::get('internal/transfer', [InternalTransferController::class, 'internalTransfer'])->name('internalTransfer');
    Route::post('internal/transfer', [InternalTransferController::class, 'storeInternalTransfer'])->name('storeInternalTransfer');
    Route::get('confirm/internal/transfer', [InternalTransferController::class, 'confirmDetail'])->name('confirmDetail');


});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
