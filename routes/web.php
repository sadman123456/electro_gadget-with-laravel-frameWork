<?php

use App\Http\Controllers\AddCategoryController;
use App\Http\Controllers\AddProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryListController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\EditCategoryController;
use App\Http\Controllers\EditProductController;
use App\Http\Controllers\EditUserController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\ProductViewController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserListController;





// http verbs: get, post, put/patch, delete



// Route::get('/', function () {
//     return view('welcome');
// });
    
Route::prefix('admin')->group(function () {

Route::get('/',[DashBoardController::class,'DashBoard' ])->name('admin.dashboard');

Route::prefix('category')->group(function () {
Route::get('/', [CategoryListController::class,'categorylist' ])->name('admin.categorylist');
Route::get('/edit',[EditCategoryController::class,'editCategory' ])->name('admin.editcategory');
Route::get('/add',[AddCategoryController::class,'addCategory' ])->name('admin.addcategory');
});

Route::prefix('product')->group(function () {
Route::get('/', [ProductListController::class,'productList' ])->name('admin.productlist');
Route::get('/add',[AddProductController::class,'addProduct' ])->name('admin.addproduct');
Route::get('/edit',[EditProductController::class,'editProduct' ])->name('admin.editproduct');
Route::get('/view',[ProductViewController::class,'productView' ])->name('admin.viewproduct');
});

Route::prefix('user')->group(function () {
Route::get('/',[UserListController::class,'userList' ])->name('admin.user');
Route::get('/registration',[RegistrationController::class,'Registration' ])->name('admin.registration');
Route::get('/edit',[EditUserController::class,'editUser' ])->name('edit.user');
});

});







 
