<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', function(){
    return view('pages.login');
});

Route::post('/user-login', [HomeController::class, 'login'])->name('dashboard.login');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/{id}/{name}', [ProductController::class, 'detail'])->name('product.detail');
Route::get('/products', [ProductController::class, 'allProduct'])->name('product.all');
Route::get('/our-team', [HomeController::class, 'ourTeam'])->name('our.team');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/client', [HomeController::class, 'client'])->name('client');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::middleware(['auth'])->group(function() {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/product', [DashboardController::class, 'showProduct'])->name('dashboard.products');
    Route::get('/dashboard/product/add', [DashboardController::class, 'addProduct'])->name('product.add');

    Route::get('/dashboard/services', [DashboardController::class, 'showServices'])->name('dashboard.services');
    Route::get('/dashboard/service/add', [DashboardController::class, 'addServices'])->name('services.add');

    Route::get('/dashboard/clients', [DashboardController::class, 'showClient'])->name('dashboard.clients');
    Route::get('/dashboard/client/add', [DashboardController::class, 'addClient'])->name('client.add');

    Route::get('/dashboard/brands', [DashboardController::class, 'showBrand'])->name('dashboard.brands');
    Route::get('/dashboard/brand/add', [DashboardController::class, 'addBrand'])->name('brand.add');

    Route::post('/product/store', [DashboardController::class, 'storeProduct']);
    Route::post('/client/store', [DashboardController::class, 'storeClient']);
    Route::post('/service/store', [DashboardController::class, 'storeServices']);
    Route::post('/brand/store', [DashboardController::class, 'storeBrand']);

    Route::get('/product/{id}/edit', [DashboardController::class, 'editProduct']);
    Route::get('/client/{id}/edit', [DashboardController::class, 'editClient']);
    Route::get('/service/{id}/edit', [DashboardController::class, 'editService']);
    Route::get('/brand/{id}/edit', [DashboardController::class, 'editBrand']);

    Route::post('/product/{id}/update', [DashboardController::class, 'updateProduct']);
    Route::post('/client/{id}/update', [DashboardController::class, 'updateClient']);
    Route::post('/service/{id}/update', [DashboardController::class, 'updateService']);
    Route::post('/brand/{id}/update', [DashboardController::class, 'updateBrand']);

    Route::get('/product/{id}/delete', [DashboardController::class, 'deleteProduct']);
    Route::get('/client/{id}/delete', [DashboardController::class, 'deleteClient']);
    Route::get('/service/{id}/delete', [DashboardController::class, 'deleteService']);
    Route::get('/brand/{id}/delete', [DashboardController::class, 'deleteBrand']);

    Route::get('/setting', [SettingController::class, 'index'])->name('dashboard.setting');
    Route::post('/setting/{id}', [SettingController::class, 'store']);
});