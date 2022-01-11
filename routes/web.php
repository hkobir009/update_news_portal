<?php
use App\Http\Controllers\fontController;
use App\Http\Controllers\BreakingNewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\deshboardController;
use App\Http\Controllers\PostController;

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
                   //  fontend Routes
//    Route::get('time',[fontController::class,'time'])->name('time');

   Route::get('/',[fontController::class,'index'])->name('home');


                   //  Admin Routes


    Route::get('/deshboard',[deshboardController::class,'index'])->name('deshboard');


   //Route::get('/deshboard_home',[deshboardController::class,'deshboard'])->name('deshboard_home');
    //  Route::get('/', function () {
    //      return view('welcome');
    //  });

    //                      Breaking news Routes

    Route::get('breaking_newses',[BreakingNewsController::class,'index'])->name('breaking_newses');
    Route::get('create_breaking_newses',[BreakingNewsController::class,'create'])->name('create_breaking_newses');
    Route::post('create_breaking_newses',[BreakingNewsController::class,'store']);
    Route::get('breaking_news_delete/{id}',[BreakingNewsController::class,'delete'])->name('breaking_news_delete');

    //                      category Routes

    // Route::get('/',[CategoryController::class,'category']);
    Route::get('/category',[CategoryController::class,'deshboardIndex'])->name('category');
    Route::get('/create_category',[CategoryController::class,'create'])->name('create_category');
    Route::post('/create_category',[CategoryController::class,'store']);
    Route::get('edit/{id}',[CategoryController::class,'edit'])->name('edit');
    Route::post('update/{id}',[CategoryController::class,'update'])->name('update');
    Route::get('category_delete/{id}',[CategoryController::class,'delete'])->name('category_delete');



    Route::get('/post',[PostController::class,'postIndex'])->name('post');
    Route::get('/create_post',[PostController::class,'create'])->name('create_post');
    Route::post('/create_post',[PostController::class,'store']);
    Route::get('post_edit/{id}',[PostController::class,'edit'])->name('post_edit');
    Route::post('post_update/{id}',[PostController::class,'update'])->name('post_update');
    Route::get('post_delete/{id}',[PostController::class,'delete'])->name('post_delete');
    
    








    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    require __DIR__.'/auth.php';
