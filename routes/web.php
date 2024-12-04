<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;


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
    });
});