<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\{Product,Category};
//route dengan mode resources
Route::resource('/category', CategoryController::class);
Route::resource('/products', ProductController::class);
Route::get('/', function (Request $request) {
    $category_id = $request->input('category_id');
    $search = $request->input('search');
    $products = Product::query() // Replace with your Model name
    ->when($category_id, function ($query, $category_id) {
        return $query->where('kategori_id', $category_id);
    })
    ->when($search, function ($query, $search) {
        return $query->where('nama', 'like', '%' . $search . '%');
    })
    ->paginate(8)
    ->withQueryString();
    $category = Category::orderby('nama','asc')->get();
    return view('user.home', compact('products', 'category'));
})->name('home');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{product}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');


// Admin

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'home'])->name('dashboard');

});
// User
Route::get('/admin', function () {
    return view('auth.login');
})->name('home');
Route::get('register', function () {
    return view('auth.register');
})->name('register');
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // CHECKOUT
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
    Route::get('/checkout/sukses', [CheckoutController::class, 'sukses'])->name('checkout.sukses');
    Route::put('/checkout/{order}/bukti-pembayaran',[CheckoutController::class,'updatePaymentProof'])->name('checkout.updatePaymentProof');

    // ORDERS
    Route::get('/orders/history', [OrderController::class, 'history'])->name('orders.history');

    // PESANAN
    Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
    Route::get('/pesanan/detail/{id}', [PesananController::class, 'detail'])->name('pesanan.detail');
    Route::get('/pesanan/list', [PesananController::class, 'list'])->name('pesanan.list');
    Route::get('/pesanan/verif', [PesananController::class, 'verif'])->name('pesanan.verif');

});

require __DIR__.'/auth.php';