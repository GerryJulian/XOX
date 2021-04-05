<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\guestController;

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
    return view('welcome');
});
Route::get('/index', [guestController::class , 'index'])->name('index');
Route::post('/cart/{id}' , [guestController::class , 'cart'])->name('addcart');
Route::get('/cart' , [guestController::class , 'cartindex'])->name('cart');
Route::get('/cartcout' , [guestController::class, 'checkout'])->name('cartcout');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [adminController::class , 'index'])->name('admin.dashboard');
    Route::get('/products' , [adminController::class , 'products'])->name('admin.products');
    Route::get('/products/search/' , [adminController::class , 'productssearch'])->name('admin.productssearch');
    Route::get('/products/add' , [adminController::class , 'productsadd'])->name('admin.addproducts');
    Route::post('/products/add' , [adminController::class , 'productsadds'])->name('admin.addproducts');
    Route::get('/products/edit/{id}' , [adminController::class , 'productsedit'])->name('admin.productedits');
    Route::post('/products/edit/{id}' , [adminController::class , 'productsedits'])->name('admin.productedits');
    Route::get('/usersadd' , [adminController::class , 'usersadd'])->name('admin.usersadd');
    Route::post('/users/usersadd' , [RegisterController::class , 'addusers'])->name('admin.usersadd');
    Route::get('/users' , [adminController::class , 'users'])->name('admin.users');
});
