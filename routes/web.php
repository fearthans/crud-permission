<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;

// ikuti Tugas
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::middleware('auth')->group(function () {
    
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/crud-permission', [PermissionController::class, 'index'])->name('crud-permission');
    Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions');

    Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
    
    //Ikuti Tugas spatie
    'mahasiswas' => MahasiswaController::class,

    //ikuti tugas AdminLTE - CRUD Permission
    'permissions' => PermissionController::class
    ]);
}); 