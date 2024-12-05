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
        Route::any('inquiry_details/{id}', 'InquiryController@InquiryDetails')->name('admin.returnOrderDetail');

        Route::get('shop-owners', 'ShopOwnerController@index');
        Route::match(['get', 'post'], 'shop-owners/{id?}', 'ShopOwnerController@createOrEdit');

        Route::get('shop-owners', 'ShopOwnerController@index')->name('admin.shopOwners');
        Route::match(['get', 'post'], 'add-edit-shop-owner/{id?}', 'ShopOwnerController@addEditShopOwner')->name('admin.addEditShopOwner');
        Route::delete('delete-shop-owner/{id}', 'ShopOwnerController@deleteShopOwner')->name('admin.deleteShopOwner');

        Route::match(['get', 'post'], 'admin-details', 'AdminController@adminDetails');
        Route::match(['get', 'post'], 'update-admin-detail', 'AdminController@updateAdminDetails');
        Route::match(['get', 'post'], 'admin-profile', 'AdminController@adminprofile');

       

    });
});
