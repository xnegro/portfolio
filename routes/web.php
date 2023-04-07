<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SettingsController;
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


Route::get('/', [HomeController::class, 'index'])->name('homw');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');


    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/product/new', [ProductsController::class, 'create'])->name('product_new');
    Route::post('/product/store', [ProductsController::class, 'store'])->name('product_store');
    Route::post('/product/img_upload', [ProductsController::class, 'image_upload'])->name('upload');

    Route::get('/product/{id}/delete', [ProductsController::class, 'destroy'])->name('product_delete');
    Route::get('/product/{id}/edit', [ProductsController::class, 'show'])->name('product_edit');
    Route::post('/product/{id}/update', [ProductsController::class, 'update'])->name('product_update');
    Route::get('/services', [ServicesController::class, 'index'])->name('services');
    Route::get('/servlice/new', [ServicesController::class, 'create'])->name('services_new');
    Route::post('/servlice/store', [ServicesController::class, 'store'])->name('service_store');
    Route::get('/servlice/{id}/delete', [ServicesController::class, 'destroy'])->name('services_delete');
    Route::get('/servlice/{id}/edit', [ServicesController::class, 'edit'])->name('services_edit');
    Route::post('/servlice/{id}/update', [ServicesController::class, 'update'])->name('services_update');
    Route::post('/servlice/img_upload', [ServicesController::class, 'image_upload'])->name('servlice_upload');


    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/settings/update', [SettingsController::class, 'update'])->name('settings_update');
    Route::post('/settings/info/update', [SettingsController::class, 'update_info'])->name('settings_update_info');


    Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolios');
    Route::get('/portfolio/new', [PortfolioController::class, 'create'])->name('portfolio_create');
    Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio_store');

    Route::get('/portfolio/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolio_delete');
    Route::get('/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio_edit');
    Route::post('/portfolio/{id}/update', [PortfolioController::class, 'update'])->name('portfolio_update');
    Route::post('/portfolio/upload_portfolio', [PortfolioController::class, 'upload'])->name('upload_portfolio');



    Route::get('/partners', [PartnersController::class, 'index'])->name('partners');
    Route::get('/partner/create', [PartnersController::class, 'create'])->name('partner_new');
    Route::get('/partner/{id}/delete', [PartnersController::class, 'destroy'])->name('partner_delete');
    Route::post('/partner/store', [PartnersController::class, 'store'])->name('partner_store');


    Route::get('/clients', [ClientsController::class, 'index'])->name('clients');
    Route::get('/client/create', [ClientsController::class, 'create'])->name('clients_new');
    Route::get('/client/{id}/delete', [ClientsController::class, 'destroy'])->name('clients_delete');
    Route::post('/client/store', [ClientsController::class, 'store'])->name('clients_store');
});
