<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::redirect('/admin','/admin/login');
Route::get('/admin/login', [AdminController::class, 'loginView'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'authLogin'])->name('admin.login');
Route::middleware(['auth','role:Admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboardView'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
    Route::post('/admin/profile', [AdminController::class, 'updateProfile'])->name('admin.profile');
    Route::post('/admin/updatepassword', [AdminController::class, 'updatePassword'])->name('admin.updatepassword');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

});
?>