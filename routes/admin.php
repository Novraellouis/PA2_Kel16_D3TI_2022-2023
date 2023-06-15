<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PemesananController;
use App\Http\Controllers\Admin\ReservationController;


Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('reservation', [ReservationController::class, 'index'])->name('reservation');
    Route::put('reservation/{id}/accept', [ReservationController::class, 'accept'])->name('reservation.accept');
    Route::put('reservation/{id}/reject', [ReservationController::class, 'reject'])->name('reservation.reject');
    Route::put('reservation/{id}/delete', [ReservationController::class, 'destroy'])->name('reservation.destroy');
    Route::get('pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
    Route::get('pemesanan/{id}/show', [PemesananController::class, 'show'])->name('pemesanan.show');
    Route::put('pemesanan/{id}/accept', [PemesananController::class, 'accept'])->name('pemesanan.accept');
    Route::put('pemesanan/{id}/reject', [PemesananController::class, 'reject'])->name('pemesanan.reject');
    Route::put('pemesanan/{id}/delete', [PemesananController::class, 'destroy'])->name('pemesanan.destroy');
    Route::get('pemesanan/export-pdf', [PemesananController::class, 'exportPDF'])->name('pemesanan.export-pdf');
});
