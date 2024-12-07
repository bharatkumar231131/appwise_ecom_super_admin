<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\CmsController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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
        Route::match(['get', 'post'], 'add-edit-package/{id?}', 'packagecontroller@addeditpackage')->name('admin.addeditpackage');
        Route::post('change-package-status', 'packagecontroller@changePackageStatus')->name('packages.status');

        Route::match(array('get', 'post'), 'delete/{type}/{id}', [AdminController::class, 'delete'])->name('admin.delete');
        Route::get('inquiries', 'InquiryController@index');
        Route::any('inquiry_details/{id}', 'inquirycontroller@inquirydetails')->name('admin.returnorderdetail');

        Route::get('shop-owners', 'ShopOwnerController@index');
        Route::match(['get', 'post'], 'shop-owners/{id?}', 'ShopOwnerController@createOrEdit');
        Route::post('change-owner-status', 'ShopOwnerController@changeOwnerStatus')->name('owners.status');

        Route::get('shop-owners', 'shopownercontroller@index')->name('admin.shopOwners');
        Route::match(['get', 'post'], 'add-edit-shop-owner/{id?}', 'shopownercontroller@addeditshopowner')->name('admin.addEditShopOwner');
        Route::delete('delete-shop-owner/{id}', 'shopownercontroller@deleteshopowner')->name('admin.deleteShopOwner');

        Route::match(['get', 'post'], 'admin-details', 'AdminController@adminDetails');
        Route::match(['get', 'post'], 'update-admin-detail', 'AdminController@updateAdminDetails');
        Route::match(['get', 'post'], 'admin-profile', 'AdminController@adminprofile');


        Route::get('pages', 'CmsController@pages');
        Route::get('add-edit-page/{id?}', 'CmsController@addEditPage')->name('admin.addEditPage');
        Route::post('update-page/{id?}', 'CmsController@updatePage')->name('admin.updatePage');
        Route::post('upload-image', 'CmsController@uploadImage');


        Route::get('/permissions/index', [PermissionController::class, 'index'])->name('permissions.index');
        Route::get('/permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
        Route::post('/permissions', [PermissionController::class, 'store'])->name('permissions.store');
        Route::get('/permissions/{id}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
        Route::post('/permissions/{id}', [PermissionController::class, 'update'])->name('permissions.update');
        Route::any('/permissions/{id}/delete', [PermissionController::class, 'destroy'])->name('permissions.delete');


        Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
        Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
        Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');
        Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
        Route::post('/roles/{id}', [RoleController::class, 'update'])->name('roles.update');
        Route::any('/roles/{id}/delete', [RoleController::class, 'destroy'])->name('roles.delete');

        Route::get('/users', [UserController::class, 'index'])->name('users.index');
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/users/{id}', [UserController::class, 'update'])->name('users.update');


        Route::match(['get', 'post'], 'logo', 'AdminController@updateLogo')->name('logo');
    });
});
