<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/detailShop', [HomeController::class, 'detailShop']);
Route::get('/detailShop/{id}', [HomeController::class, 'detailShop']);
Route::get('/categoryShop/{slug}', [HomeController::class, 'categoryShop']);

Route::get('/companyProfile', [HomeController::class, 'companyProfile']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/dashboard', [AdminController::class, 'index']);

Route::get('/category', [AdminController::class, 'category']);
Route::post('/addCategory', [AdminController::class, 'addCategory']);
Route::get('/deleteCategory/{id}', [AdminController::class, 'deleteCategory']);

Route::get('/showProduct', [AdminController::class, 'showProduct']);
Route::get('/vAddProduct', [AdminController::class, 'vAddProduct']);
Route::post('/addProduct', [AdminController::class, 'addProduct']);
Route::get('/deleteProduct/{id}', [AdminController::class, 'deleteProduct']);
Route::get('/editProduct/{id}', [AdminController::class, 'editProduct']);
Route::post('/editProductConfirm/{id}', [AdminController::class, 'editProductConfirm']);

Route::get('/tableUser', [AdminController::class, 'tableUser']);
Route::get('/deleteUser/{id}', [AdminController::class, 'deleteUser']);

Route::get('/showBanner', [AdminController::class, 'showBanner']);
Route::get('/vAddBanner', [AdminController::class, 'vAddBanner']);
Route::post('/addBanner', [AdminController::class, 'addBanner']);
Route::get('/deleteBanner/{id}', [AdminController::class, 'deleteBanner']);

Route::get('/profile', [AdminController::class, 'profile']);