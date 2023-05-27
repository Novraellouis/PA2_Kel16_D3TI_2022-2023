<?php

use App\Models\Reservation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\FoodController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Web\DetailController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Web\AboutUsController;
use App\Http\Controllers\Web\CheckoutController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Web\PemesananController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Web\ReservationController;

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

require_once __DIR__ . '/admin.php';

Route::get('about', [AboutUsController::class, 'index'])->name('about');
Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::get('login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::get('menu', [FoodController::class, 'menu'])->name('menu');
Route::get('/menudetails/{menu}', [FoodController::class, 'index'])->name('menu.menudetails');


Route::get('booking', function () {
    return view('pages.web.booking.booking');
});
Route::get('portfolio', function () {
    return view('pages.web.portfolio.portfolio');
});
// Route::get('menudetails',function(){
//     return view('pages.web.menu.menudetails');
// });
Route::get('contact', function () {
    return view('pages.web.contact.contactUs');
});
Route::get('shop', function () {
    return view('pages.web.shop.shop');
});
Route::get('shopdetails', function () {
    return view('pages.web.shop.shopdetails');
});
Route::get('cart', function () {
    return view('pages.web.shop.cart');
});
// Route::get('checkout', function () {
//     return view('pages.web.shop.checkout');
// });
Route::get('checkout', [CheckoutController::class, 'cart'])->name('checkout');

Route::resource('reservation', ReservationController::class)->only('index');
Route::middleware('role:customer')->group(function () {
    Route::resource('reservation', ReservationController::class)->except('index');
});
Route::put('reservation/{id}/cancel', [ReservationController::class, 'cancel'])->name('reservation.cancel');

Route::middleware('role:admin')->prefix('admin')->group(function () {
    Route::get('home', function () {
        return view('pages.admin.dashboard.home');
    });
    // Route::get('menu',function(){
    //     return view('pages.admin.menu.main');
    // });
    Route::resource('menu', MenuController::class);
    Route::resource('booking', BookingController::class);
    Route::resource('table', TableController::class);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // Route::get('/search', 'MenuController@search')->name('menu.search');
    Route::get('/menu/search', [MenuController::class, 'search'])->name('menu.search');
});
Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::post('cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/decrease', [CartController::class, 'decrease'])->name('cart.decrease');
Route::delete('cart/{id}/remove', [CartController::class, 'remove'])->name('cart.remove');

Route::get('detail', [DetailController::class, 'index'])->name('detail.index');
Route::get('pemesanan', [PemesananController::class, 'index'])->name('pemesanan.index');

Route::post('checkout', [CheckoutController::class, 'checkout'])->name('checkout.post');
