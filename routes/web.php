<?php

use App\Http\Controllers\BreakingNewsController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\deshboardController;
use Illuminate\Support\Facades\Route;

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


                   //  Admin Routes


    //Route::get('/deshboard',[deshboardController::class,'index'])->name('deshboard');


   //Route::get('/deshboard_home',[deshboardController::class,'deshboard'])->name('deshboard_home');
     Route::get('/', function () {
         return view('welcome');
     });

    //                      Breaking news Routes

    Route::get('breaking_newses',[BreakingNewsController::class,'index'])->name('breaking_newses');
    Route::get('create_breaking_newses',[BreakingNewsController::class,'create'])->name('create_breaking_newses');
    Route::post('create_breaking_newses',[BreakingNewsController::class,'store']);
    Route::match(['get','post'],'delete/{id}',[BreakingNewsController::class,'destroy'])->name('delete');

    //                      category Routes

    // Route::get('/',[MenuController::class,'menu']);
    // Route::get('/deshboard',[MenuController::class,'deshboardIndex'])->name('deshboard');
    // Route::get('/create',[MenuController::class,'create'])->name('create');
    // Route::post('/create',[MenuController::class,'store']);
    // Route::get('edit/{id}',[MenuController::class,'edit'])->name('edit');
    // Route::post('update/{id}',[MenuController::class,'update'])->name('update');
    // Route::get('delete/{id}',[MenuController::class,'delete'])->name('delete');
    
    








    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    require __DIR__.'/auth.php';
