<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\StudentYearController;

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
 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.layouts.index');    
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/', function () {
        return view('admin.layouts.index');
    });
    Route::prefix('users')->group(function(){
        Route::get('view',[UserController::class, 'index'])->name('user.view');
        Route::get('add',[UserController::class, 'add'])->name('user.add');
        Route::post('store',[UserController::class, 'store'])->name('user.store');
        Route::get('edit/{id}',[UserController::class, 'edit'])->name('user.edit');
        Route::post('update/{id}',[UserController::class, 'update'])->name('user.update');
        Route::get('delete/{id}',[UserController::class, 'delete'])->name('user.delete');
    });
    //setups routes
    Route::prefix('setups')->group(function(){ 
            //student class routes
            Route::get('class/view',[ClassController::class, 'index'])->name('class.view');
            Route::get('class/add',[ClassController::class, 'add'])->name('class.add');
            Route::post('class/store',[ClassController::class, 'store'])->name('class.store');
            Route::get('class/edit/{id}',[ClassController::class, 'edit'])->name('class.edit');
            Route::post('class/update/{id}',[ClassController::class, 'update'])->name('class.update');
            Route::get('class/delete/{id}',[ClassController::class, 'delete'])->name('class.delete'); 
            //student year routes
            Route::get('year/view',[StudentYearController::class, 'index'])->name('year.view');
            Route::get('year/add',[StudentYearController::class, 'add'])->name('year.add');
            Route::post('year/store',[StudentYearController::class, 'store'])->name('year.store');
            Route::get('year/edit/{id}',[StudentYearController::class, 'edit'])->name('year.edit');
            Route::post('year/update/{id}',[StudentYearController::class, 'update'])->name('year.update');
            Route::get('year/delete/{id}',[StudentYearController::class, 'delete'])->name('year.delete'); 
    });
    
});

