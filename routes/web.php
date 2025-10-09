<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\RoomController;
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

require __DIR__ . '/auth.php';

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::middleware('auth')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('admin/dashboard', 'AdminDashboard')->name('admin.dashboard');
        Route::get('admin/logout', 'AdminLogout')->name('admin.logout');
        Route::get('admin/profile', 'AdminProfile')->name('admin.profile');
        Route::post('admin/profile/update', 'AdminProfileUpdate')->name('admin.profile.update');
        Route::get('admin/change/password', 'AdminChangePassword')->name('admin.change.password');
        Route::post('admin/update/password', 'AdminUpdatePassword')->name('admin.update.password');
    });

    Route::controller(HallController::class)->group(function () {
        Route::get('halls', 'Index')->name('hall.index');
        Route::get('hall/add', 'AddHall')->name('hall.add');
        Route::post('hall/store', 'StoreHall')->name('hall.store');
        Route::get('hall/edit/{id}', 'EditHall')->name('hall.edit');
        Route::post('hall/update/{id}', 'UpdateHall')->name('hall.update');
        Route::get('hall/delete/{id}', 'DeleteHall')->name('hall.delete');
    });

    Route::controller(RoomController::class)->group(function () {
        Route::get('rooms', 'Index')->name('room.index');
        Route::get('room/add', 'AddRoom')->name('room.add');
        Route::post('room/store', 'StoreRoom')->name('room.store');
        Route::get('room/edit/{id}', 'EditRoom')->name('room.edit');
        Route::post('room/update', 'UpdateRoom')->name('room.update');
        Route::get('room/delete/{id}', 'DeleteRoom')->name('room.delete');
    });
});


Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
