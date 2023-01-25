<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');;

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(["middleware" => ['auth']], function () {
    /* user create */
    Route::resource('user', UserController::class);
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::get('logouts', [UserController::class, 'logouts'])->name('logouts');
    Route::put('password/change', [UserController::class, 'change_password'])->name('passworUserControllerd.change');

    /* department */
    Route::resource('department', DepartmentController::class);

    /* setting */
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
});
