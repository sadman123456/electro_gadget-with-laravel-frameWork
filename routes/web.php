<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\Category;
use Illuminate\Routing\RouteRegistrar;

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

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/category/{category}/product', [WelcomeController::class, 'productList'])->name('categories.products.index');



require __DIR__.'/auth.php';


Route::middleware('auth')->group(function(){
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::prefix('admin')->group(function () {

    Route::get('/',[DashBoardController::class,'DashBoard' ])->name('admin.dashboard');
    
    Route::resource('category', CategoryController::class);
    
    Route::get('/categories-trash', [CategoryController::class,'trash' ])->name('category.trash');
    Route::get('/categories-trash/{id}/restore', [CategoryController::class,'restore' ])->name('category.restore');
    Route::get('/categories-trash/{id}/delete', [CategoryController::class,'delete' ])->name('category.delete');

    Route::resource('product', ProductController::class);

    Route::get('/product-trash', [ProductController::class,'trash' ])->name('product.trash');
    Route::get('/{id}/restore', [ProductController::class,'restore' ])->name('product.restore');
    Route::get('/{id}/delete', [ProductController::class,'delete' ])->name('product.delete');
    Route::get('/products/pdf', [ProductController::class, 'downloadPdf'])->name('products.pdf');

    Route::resource('brands', BrandController::class);
    
    Route::get('/brands-trash', [BrandController::class,'trash' ])->name('brands.trash');
    Route::get('/brands-trash/{id}/restore', [BrandController::class,'restore' ])->name('brands.restore');
    Route::get('/brands-trash/{id}/delete', [BrandController::class,'delete' ])->name('brands.delete');

    Route::resource('colors', ColorController::class);
    Route::get('/pdf', [ColorController::class, 'downloadPdf'])->name('colors.pdf');
    Route::get('/colors-trash', [ColorController::class,'trash' ])->name('colors.trash');
    Route::get('/colors-trash/{id}/restore', [ColorController::class,'restore' ])->name('colors.restore');
    Route::get('/colors-trash/{id}/delete', [ColorController::class,'delete' ])->name('colors.delete');

    Route::resource('users', UserController::class);

    Route::get('/{user}/change_role', [UserController::class,'changeRole' ])->name('users.change_role');
    Route::patch('/{user}/change_role', [UserController::class,'updateRole' ])->name('user.update_role');



    // Route::get('/products/pdf', [ProductController::class, 'downloadPdf'])->name('products.pdf');
    
    // Route::prefix('category')->group(function () {
    
    // Route::get('/', [CategoryListController::class,'index' ])->name('category.index');
    
    // Route::get('/add',[CategoryListController::class,'create' ])->name('category.create');
    // Route::post('/add',[CategoryListController::class,'store' ])->name('category.store');
    
    // Route::get('/{id}/edit',[CategoryListController::class,'edit' ])->name('category.edit');
    // Route::patch('/{id}/edit',[CategoryListController::class,'update' ])->name('category.update');
    
    // Route::delete('/{id}/delete', [CategoryListController::class,'destroy' ])->name('category.destroy');
    
    // Route::get('/categories-trash', [CategoryListController::class,'trash' ])->name('category.trash');
    // Route::get('/{id}/restore', [CategoryListController::class,'restore' ])->name('category.restore');
    // Route::get('/{id}/delete', [CategoryListController::class,'delete' ])->name('category.delete');
    
    //    Route::resource('category', CategoryListController::class);
    
    // });
    
    // Route::prefix('product')->group(function () {
    // Route::get('/', [ProductListController::class,'index' ])->name('product.index');
    // Route::get('/add',[ProductListController::class,'create' ])->name('admin.addproduct');
    // Route::post('/add',[ProductListController::class,'store'])->name('product.store');
    
    // Route::get('/view/{id}',[ProductListController::class,'show' ])->name('admin.viewproduct');
    
    // Route::get('/{id}/edit',[ProductListController::class,'edit' ])->name('admin.editproduct');
    // Route::patch('/{id}/edit',[ProductListController::class,'update' ])->name('product.update');
    
    
    // Route::delete('/{id}/delete', [ProductListController::class,'destroy' ])->name('product.destroy');
    
    // Route::get('/products-trash', [ProductListController::class,'trash' ])->name('product.trash');
    // Route::get('/{id}/restore', [ProductListController::class,'restore' ])->name('product.restore');
    // Route::get('/{id}/delete', [ProductListController::class,'delete' ])->name('product.delete');
    
    // // Route::resource('product', CategoryListController::class);
    
    
    
    // });
    

    
    });
});
