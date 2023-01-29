<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/iletisim', [PagesController::class, 'contact'])->name('contact');
Route::get('/katalog', [PagesController::class, 'catalog'])->name('catalog');
Route::get('/urunler', function () {
    return redirect('urunler/silindirler');
})->name('products');
Route::get('/urunler/ara', [ProductsController::class, 'search'])->name('products.search');
Route::get('/urunler/{category}', [ProductsController::class, 'list'])->name('products.list');
Route::get('/urunler/{category}/{product}', [ProductsController::class, 'detail'])->name('products.detail');
