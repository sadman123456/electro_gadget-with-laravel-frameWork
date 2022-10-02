<?php

use App\Http\Controllers\AddCategoryController;
use App\Http\Controllers\AddProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryListController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\EditCategoryController;
use App\Http\Controllers\EditProductController;
use App\Http\Controllers\EditUserController;
use App\Http\Controllers\PatientListController;
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

Route::get('/', [CategoryListController::class,'index' ])->name('admin.categorylist');
Route::get('/add',[CategoryListController::class,'create' ])->name('admin.addcategory');
Route::post('/',[CategoryListController::class,'store' ])->name('category.store');


Route::get('/{id}/edit',[CategoryListController::class,'editCategory' ])->name('admin.editcategory');
Route::patch('/{id}/edit',[CategoryListController::class,'update' ])->name('category.update');

Route::delete('/{id}/delete', [CategoryListController::class,'destroy' ])->name('category.destroy');


});

Route::prefix('product')->group(function () {
Route::get('/', [ProductListController::class,'index' ])->name('admin.productlist');
Route::get('/add',[AddProductController::class,'addProduct' ])->name('admin.addproduct');
Route::get('/edit',[EditProductController::class,'editProduct' ])->name('admin.editproduct');
Route::get('/view/{id}',[ProductViewController::class,'productView' ])->name('admin.viewproduct');
Route::get('/{id}/delete', [ProductListController::class,'destroy' ])->name('product.destroy');


});

Route::prefix('user')->group(function () {
Route::get('/',[UserListController::class,'userList' ])->name('admin.user');
Route::get('/registration',[RegistrationController::class,'Registration' ])->name('admin.registration');
Route::get('/edit',[EditUserController::class,'editUser' ])->name('edit.user');
});

Route::prefix('patience')->group(function () {
    Route::get('/',[PatientListController::class,'index' ])->name('patient.index');
    Route::patch('/{id}/show',[PatientListController::class,'show' ])->name('patient.show');

    Route::get('/add',[PatientListController::class,'create' ])->name('admin.addpatient');
    Route::post('/add',[PatientListController::class,'store' ])->name('patient.store');

    Route::get('/{id}/edit',[PatientListController::class,'edit' ])->name('admin.editpatient');
    Route::patch('/{id}/edit',[PatientListController::class,'update' ])->name('patient.update');

    Route::delete('/{id}/delete', [PatientListController::class,'destroy' ])->name('patient.destroy');


    });




});







 
