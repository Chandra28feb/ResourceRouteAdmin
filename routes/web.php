<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminUserController; 
use App\Http\Controllers\Admin\CompanyController; 
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');

});

// Admin Routes
Route::get('admin',[AdminAuthController::class,'index'])->name('admin');
Route::post('admin/login',[AdminAuthController::class,'login'])->name('admin.login');
Route::group(['middleware' => 'is_admin'],function(){

    Route::get('admin/logout',[AdminAuthController::class,'logout'])->name('admin.logout');
    Route::get('admin/dashboard',[AdminHomeController::class,'index'])->name('admin.dashboard');
    Route::get('admin/profile',[AdminHomeController::class,'profile'])->name('admin.profile');
    Route::get('admin/profile/edit',[AdminHomeController::class,'edit'])->name('admin.profile.edit');
    Route::post('admin/profile/update',[AdminHomeController::class,'update'])->name('admin.update');
    Route::get('admin/users',[AdminUserController::class,'index'])->name('admin.users');
    Route::post('admin/users/create',[AdminUserController::class,'create'])->name('admin.user.create');
    Route::get('admin/user/delete/{id}',[AdminUserController::class,'destroy'])->name('admin.user.destroy');
    Route::get('admin/user/edit/{id}',[AdminUserController::class,'edit'])->name('admin.user.edit');
    Route::post('admin/user/update',[AdminUserController::class,'update'])->name('admin.user.update');
    Route::get('admin/password/edit',[AdminUserController::class,'passwordEdit'])->name('admin.password.edit');
    Route::post('admin/password/update',[AdminUserController::class,'passwordUpdate'])->name('admin.password.update');
    
    Route::resource('company', 'App\Http\Controllers\Admin\CompanyController', [
        'except' => ['create','show']
    ]);
});
