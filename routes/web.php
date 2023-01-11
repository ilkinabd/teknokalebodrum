<?php

use App\Http\Controllers\ProductsController;
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
    return redirect('/urunler');
})->name('home');
Route::get('/urunler', function () {
    return redirect('urunler/silindirler');
});

Route::get('/urunler/{slug}', [ProductsController::class, 'index'])->name('products');
