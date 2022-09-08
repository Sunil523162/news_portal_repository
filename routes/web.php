<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewsLetterController;
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

Route::get('language/{lang}', function ($lang) {
    session()->put('locale', $lang);
    return redirect()->back();
})->name('change.locale');



Route::get('login', [LoginController::class, 'redirectToLoginPage'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');



// admin route here
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' =>
['auth', 'prevent-back-history']], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');


    // post category
    Route::group(['prefix' => 'post-category'], function () {
        Route::get('/', ['as' => 'admin.post.category.index', 'uses' => 'PostCategoryController@index']);
        Route::post('/store', ['as' => 'admin.post.category.store', 'uses' => 'PostCategoryController@store']);
        Route::post('/update/{id}', ['as' => 'admin.post.category.update', 'uses' => 'PostCategoryController@update']);
        Route::get('/delete/{id}', ['as' => 'admin.post.category.delete', 'uses' => 'PostCategoryController@destroy']);
    });

    // post route here
    Route::group(['prefix' => 'post'], function () {
        Route::get('/', ['as' => 'admin.post.index', 'uses' => 'PostController@index']);
        Route::get('/create', ['as' => 'admin.post.create', 'uses' => 'PostController@create']);
        Route::post('/store', ['as' => 'admin.post.store', 'uses' => 'PostController@store']);
        Route::get('/edit/{id}', ['as' => 'admin.post.edit', 'uses' => 'PostController@edit']);
        Route::get('/show/{id}', ['as' => 'admin.post.show', 'uses' => 'PostController@show']);
        Route::post('/update/{id}', ['as' => 'admin.post.update', 'uses' => 'PostController@update']);
        Route::get('/delete/{id}', ['as' => 'admin.post.delete', 'uses' => 'PostController@destroy']);
    });
    // video route here
    Route::group(['prefix' => 'video'], function () {
        Route::get('/', ['as' => 'admin.video.index', 'uses' => 'VideoController@index']);
        Route::get('/create', ['as' => 'admin.video.create', 'uses' => 'VideoController@create']);
        Route::post('/store', ['as' => 'admin.video.store', 'uses' => 'VideoController@store']);
        Route::get('/edit/{id}', ['as' => 'admin.video.edit', 'uses' => 'VideoController@edit']);
        Route::post('/update/{id}', ['as' => 'admin.video.update', 'uses' => 'VideoController@update']);
        Route::get('/delete/{id}', ['as' => 'admin.video.delete', 'uses' => 'VideoController@destroy']);
    });
});



// frontend route start fro here
Route::get('/', [HomeController::class, 'landingpage'])->name('landingpage');
Route::get('business', [HomeController::class, 'business'])->name('business');
Route::get('politics', [HomeController::class, 'politics'])->name('politics');
Route::get('sport', [HomeController::class, 'sport'])->name('sports');
Route::get('technology', [HomeController::class, 'technology'])->name('tech');
Route::get('culture', [HomeController::class, 'culture'])->name('culture');
Route::get('news', [HomeController::class, 'news'])->name('news');
// Route::get('video', [HomeController::class, 'video'])->name('video');
Route::get('video', [HomeController::class, 'video'])->name('video');
// Route::get('/search/', [HomeController::class, 'search'])->name('search');
Route::get('single/{slug}', [HomeController::class, 'single'])->name('single');
Route::get('post/search',[HomeController::class,'search'])->name('post.search');
