<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Livewire\CartComponent;
use App\Models\Product;

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

Route::get('/', function () {
    $products = Product::inRandomOrder()->limit(5)->get();
    return view('index',compact('products'));
})->name('index');

Route::middleware(['guest'])->group(function(){
    Route::get('/regis',[AuthController::class,'regis'])->name('regis');
    Route::post('/signup',[AuthController::class,'AUTHRegis'])->name('signup');
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/verif',[AuthController::class,'AUTHLogin'])->name('verif');
});

Route::get('/shop',[ProductController::class,'shop'])->name('shop');
Route::get('/product/{slug}',[ProductController::class,'product'])->name('product');

Route::middleware(['auth'])->group(function(){
    Route::get('/profile',[UserController::class,'profile'])->name('profile');
    Route::post('/addcart',[CartController::class,'addtocart'])->name('addcart');
    Route::get('/cart',[CartController::class,'cart'])->name('cart');
    Route::delete('/cart/{id}',[CartController::class,'destroy'])->name('cart.destroy');
    Route::put('/cart/{id}',[CartController::class,'update'])->name('cart.update');
    Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
    Route::get('/checkout/card',[CheckoutController::class,'index'])->name('checkout.card');
    Route::get('/checkout/cod',[CheckoutController::class,'index'])->name('checkout.cod');
    Route::get('/status',[ProductController::class,'status']);
    Route::put('/cartupdate/{id}',[Cartcontroller::class,'updateCart'])->name('cartupdate');
    Route::delete('/removeCart/{id}',[Cartcontroller::class,'removeCart'])->name('removeCart');
    // Route::get('/cartcount', [CartController::class, 'count'])->name('cart.count')->redirect('/');
});

Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::middleware(['admin','auth'])->group(function () {
    Route::view('/admin','layout.main')->name('admin');
    Route::resource('useradmin',UserController::class);
    Route::resource('cartadmin',CartController::class);
    Route::resource('productadmin', UserController::class);
});


