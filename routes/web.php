<?php

use App\Http\Controllers\NewAccountController;
use App\Http\Controllers\ProfileController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth', 'active'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');

});

require __DIR__.'/auth.php';
