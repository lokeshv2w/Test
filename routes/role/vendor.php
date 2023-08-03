<?php
use Illuminate\Support\Facades\Route;
Route::middleware(['auth','role:Vendor'])->group(function(){
    Route::get('/vendor/dashboard', function(){
        echo "Welcome To Vendor Dashboard";
    })->name('vendor.dashboard');
});
?>