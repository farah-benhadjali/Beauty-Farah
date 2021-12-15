<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ContactController;
use App\Models\Produit;
use App\Models\Contact;
use App\Http\Controllers\UserController;
use App\Models\User;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('user/pages/home');
})->name('home');

Route::get('/contact', function () {
    return view('user/pages/contact');
});
Route::get('/cart', function () {
    return view('user/pages/cart');
});
Route::resource('/produit', ProduitController::class);
Route::get('/home', [App\Http\Controllers\ProduitController::class, 'index1'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('user', UserController::class);

