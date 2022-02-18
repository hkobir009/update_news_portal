<?php

use App\Models\post;
use App\Models\category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\fontController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\deshboardController;
use App\Http\Controllers\BreakingNewsController;
use App\Http\Controllers\FontCategoryController;
use App\Http\Controllers\SubscribeController;

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

   Route::get('/',[fontController::class,'index'])->name('home');


                   //  Category Routes
   Route::get('/bank',[FontCategoryController::class,'bank'])->name('bank');
   Route::get('/jobs',[FontCategoryController::class,'jobs'])->name('jobs');
   Route::get('/health',[FontCategoryController::class,'health'])->name('health');
   Route::get('/hockey',[FontCategoryController::class,'hockey'])->name('hockey');
   Route::get('/Poetry',[FontCategoryController::class,'Poetry'])->name('Poetry');
   Route::get('/sports',[FontCategoryController::class,'sports'])->name('sports');
   Route::get('/campus',[FontCategoryController::class,'campus'])->name('campus');
   Route::get('/columns',[FontCategoryController::class,'columns'])->name('columns');
   Route::get('/economy',[FontCategoryController::class,'economy'])->name('economy');
   Route::get('/cricket',[FontCategoryController::class,'cricket'])->name('cricket');
   Route::get('/weather',[FontCategoryController::class,'weather'])->name('weather');
   Route::get('/football',[FontCategoryController::class,'football'])->name('football');
   Route::get('/opinions',[FontCategoryController::class,'opinions'])->name('opinions');
   Route::get('/national',[FontCategoryController::class,'national'])->name('national');
   Route::get('/religion',[FontCategoryController::class,'religion'])->name('religion');
   Route::get('/politics',[FontCategoryController::class,'politics'])->name('politics');
   Route::get('/holeWorld',[FontCategoryController::class,'holeWorld'])->name('holeWorld');
   Route::get('/education',[FontCategoryController::class,'education'])->name('education');
   Route::get('/hollywood',[FontCategoryController::class,'hollywood'])->name('hollywood');
   Route::get('/bollywood',[FontCategoryController::class,'bollywood'])->name('bollywood');
   Route::get('/tollywood',[FontCategoryController::class,'tollywood'])->name('tollywood');
   Route::get('/dhaliwood',[FontCategoryController::class,'dhaliwood'])->name('dhaliwood');
   Route::get('/lifestyle',[FontCategoryController::class,'lifestyle'])->name('lifestyle');
   Route::get('/exclusive',[FontCategoryController::class,'exclusive'])->name('exclusive');
   Route::get('/insurance',[FontCategoryController::class,'insurance'])->name('insurance');
   Route::get('/expatriate',[FontCategoryController::class,'expatriate'])->name('expatriate');
   Route::get('/smallStory',[FontCategoryController::class,'smallStory'])->name('smallStory');
   Route::get('/stockMarket',[FontCategoryController::class,'stockMarket'])->name('stockMarket');
   Route::get('/courtoflaw',[FontCategoryController::class,'courtoflaw'])->name('courtoflaw');
   Route::get('/otherSports',[FontCategoryController::class,'otherSports'])->name('otherSports');
   Route::get('/international',[FontCategoryController::class,'international'])->name('international');
   Route::get('/bookCriticism',[FontCategoryController::class,'bookCriticism'])->name('bookCriticism');
   Route::get('/entertainment',[FontCategoryController::class,'entertainment'])->name('entertainment');
   Route::get('/artAndLiterature',[FontCategoryController::class,'artAndLiterature'])->name('artAndLiterature');
   Route::get('/fromFacebookPage',[FontCategoryController::class,'fromFacebookPage'])->name('fromFacebookPage');
   Route::get('/informationTechnology',[FontCategoryController::class,'informationTechnology'])->name('informationTechnology');
   
                  

                     //  subscribe Routes
   Route::post('create_sub',[SubscribeController::class,'store'])->name('store_sub');


                //  Admin Routes

Route::group(['middleware' => 'auth'], function () {
                    
        //                           Dashboard route
    Route::get('/dashboard',[deshboardController::class,'index'])->name('dashboard');

                                  //  posts Routes
   Route::get('news/{category}/{id}',[fontController::class,'posts'])->name('posts');
    
        //                      Breaking news Routes

    Route::get('breaking_newses',[BreakingNewsController::class,'index'])->name('breaking_newses');
    Route::get('create_breaking_newses',[BreakingNewsController::class,'create'])->name('create_breaking_newses');
    Route::post('create_breaking_newses',[BreakingNewsController::class,'store'])->name('breaking_news_category_store');
    Route::get('breaking_news_delete/{id}',[BreakingNewsController::class,'delete'])->name('breaking_news_delete');

        //                      category Routes

    Route::get('/category',[CategoryController::class,'deshboardIndex'])->name('category');
    Route::get('/create_category',[CategoryController::class,'create'])->name('create_category');
    Route::post('/create_category',[CategoryController::class,'store'])->name('category_store');
    Route::get('edit/{id}',[CategoryController::class,'edit'])->name('edit');
    Route::post('update/{id}',[CategoryController::class,'update'])->name('update');
    Route::get('category_delete/{id}',[CategoryController::class,'delete'])->name('category_delete');

        //                      tag Routes

    Route::get('tag',[TagController::class,'tagIndex'])->name('tag');
    Route::get('create_tag',[TagController::class,'create'])->name('create_tag');
    Route::post('create_tag',[TagController::class,'store'])->name('store_tag');
    Route::get('tag_edit/{id}',[TagController::class,'edit'])->name('tag_edit');
    Route::post('tag_update/{id}',[TagController::class,'update'])->name('tag_update');
    Route::get('tag_delete/{id}',[TagController::class,'delete'])->name('tag_delete');

        //                      post Routes

    Route::get('/blog_post',[PostController::class,'postIndex'])->name('blog_post');
    Route::get('/create_post',[PostController::class,'create'])->name('create_post');
    Route::post('/create_post',[PostController::class,'store'])->name('store_post');
    Route::get('post_edit/{id}',[PostController::class,'edit'])->name('post_edit');
    Route::post('post_update/{id}',[PostController::class,'update'])->name('post_update');
    Route::post('post_delete/{id}',[PostController::class,'delete'])->name('post_delete');
            
        //                           Ads route
    Route::get('ads',[AdsController::class,'adsIndex'])->name('ads');
    Route::get('create_ads',[AdsController::class,'create'])->name('create_ads');
    Route::post('create_ads',[AdsController::class,'store'])->name('store_ads');
    Route::get('ads_edit/{id}',[AdsController::class,'edit'])->name('ads_edit');
    Route::post('ads_update/{id}',[AdsController::class,'update'])->name('ads_update');
    Route::get('ads_delete/{id}',[AdsController::class,'delete'])->name('ads_delete');


    //                           Subscribe route
    Route::get('subscribe',[SubscribeController::class,'subIndex'])->name('subscribe');
    Route::post('sub_delete/{id}',[SubscribeController::class,'delete'])->name('sub_delete');

    //                           user route
    Route::get('userInfo',[deshboardController::class,'userInfo'])->name('userInfo');
    

});




    // Route::get('/', function () {
    //     return view('welcome');
    // });

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth'])->name('dashboard');

    require __DIR__.'/auth.php';
