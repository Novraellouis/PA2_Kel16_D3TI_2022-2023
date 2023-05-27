<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ReservationController;


Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('reservation', [ReservationController::class, 'index'])->name('reservation');
    Route::put('reservation/{id}/accept', [ReservationController::class, 'accept'])->name('reservation.accept');
    Route::put('reservation/{id}/reject', [ReservationController::class, 'reject'])->name('reservation.reject');
    Route::put('reservation/{id}/delete', [ReservationController::class, 'destroy'])->name('reservation.destroy');
    
});
