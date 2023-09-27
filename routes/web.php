<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDisplayController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\EmployeeController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/test', [HomeController::class, 'test'])->name('test');

Route::get('/hello/world', [HomeController::class, 'hello'])->name('hello');

Route::get('/myform/example', [HomeController::class, 'myform'])->name('myform');


Route::get('/products', [ProductController::class, 'index'])->name('product_index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product_create');
Route::post('/products/store', [ProductController::class, 'store'])->name('product_store');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('product_edit');
Route::get('/products/delete/{id}', [ProductController::class, 'delete'])->name('product_delete');
Route::get('/products/view/{id}', [ProductController::class, 'view'])->name('product_view');


Route::post('/display/selected', [ProductDisplayController::class, 'selectedItems'])->name('display_selected');
Route::get('/display/list', [ProductDisplayController::class, 'list'])->name('display_list');
Route::get('/display/cart', [ProductDisplayController::class, 'cart'])->name('display_cart');


Route::get('/user/seller-regs', [SellerController::class, 'create'])->name('seller_registration');
Route::post('/user/seller-store', [SellerController::class, 'store'])->name('seller_store');
Route::get('/user/seller-list', [SellerController::class, 'list'])->name('seller_list');

Route::get('/seller/product-form', [SellerController::class, 'createProductForm'])->name('createProductForm');
Route::post('/seller/product-store', [SellerController::class, 'storeProduct'])->name('storeProduct');
Route::get('/seller/product-list', [SellerController::class, 'productList'])->name('productList');


Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

