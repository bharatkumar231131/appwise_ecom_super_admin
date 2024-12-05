<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\InquiryController;

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



Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::match(['get', 'post'], 'login', 'AdminController@login');
    Route::middleware(['admin'])->group(function () {
        Route::get('dashboard', 'AdminController@dashboard');
        Route::get('logout', 'AdminController@logout');

        //packages
        Route::get('packages', 'PackageController@packages');
        Route::match(['get', 'post'], 'add-edit-package/{id?}', 'PackageController@addEditPackage')->name('admin.addEditPackage');

        Route::match(array('get', 'post'), 'delete/{type}/{id}', [AdminController::class, 'delete'])->name('admin.delete');
        Route::get('inquiries', 'InquiryController@index');
        Route::get('shop-owners', 'ShopOwnerController@index');
        Route::match(['get', 'post'], 'shop-owners/{id?}', 'ShopOwnerController@createOrEdit');



    });
});


// // Display the list of all shop owners
// Route::get('shop-owners', [ShopOwnerController::class, 'index'])->name('shop_owners.index');

// // Show the form to create or edit a shop owner

// // Store or update the shop owner
// Route::post('shop-owners/{id?}', [ShopOwnerController::class, 'storeOrUpdate'])->name('shop_owners.storeOrUpdate');

// // Delete the shop owner
// Route::delete('shop-owners/{id}', [ShopOwnerController::class, 'destroy'])->name('shop_owners.destroy');
