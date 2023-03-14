<?php
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
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

Route::group(['prefix'     => LaravelLocalization::setLocale(),
              'middleware' => ['localize', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get(LaravelLocalization::transRoute('routes.home'), [PagesController::class, 'home'])->name('home');
    Route::get(LaravelLocalization::transRoute('routes.contact'), [PagesController::class, 'contact'])->name('contact');
    Route::get(LaravelLocalization::transRoute('routes.about'), [PagesController::class, 'about'])->name('about');
    Route::get(LaravelLocalization::transRoute('routes.references'), [PagesController::class, 'references'])->name('references');
    Route::get(LaravelLocalization::transRoute('routes.catalog'), [PagesController::class, 'catalog'])->name('catalog');
    Route::get(LaravelLocalization::transRoute('routes.products'), function () {
        return redirect()->route(LaravelLocalization::transRoute('products.list'), ['category' => 'silindirler']);
    })->name('products');
    Route::get(LaravelLocalization::transRoute('routes.search'), [ProductsController::class, 'search'])->name('products.search');
    Route::get(LaravelLocalization::transRoute('routes.products.list'), [ProductsController::class, 'list'])->name('products.list');
    Route::get(LaravelLocalization::transRoute('routes.products.detail'), [ProductsController::class, 'detail'])->name('products.detail');
    Route::get(LaravelLocalization::transRoute('routes.services.list'), [ServicesController::class, 'list'])->name('services.list');
    Route::get(LaravelLocalization::transRoute('routes.services.detail'), [ServicesController::class, 'detail'])->name('services.detail');
    // Route::get('/dil/{lang}', [LanguageController::class, 'change'])->name('language.change');
});
Route::post('/ajax/contact', [AjaxController::class, 'contactForm'])->name('ajax.contact');
Route::post('/ajax/service', [AjaxController::class, 'serviceForm'])->name('ajax.service');
