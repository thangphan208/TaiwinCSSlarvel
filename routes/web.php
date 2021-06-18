<?php

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

//Route::get('/', function () {
//    return view('index');
//});

//Route::get('/', function () {
//    return view('index');
//})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
        Route::get('/', 'HomeController@index')->name('homePage');
        Route::get('/myPost', 'HomeController@myPost')->name('homePage-myPost');
        Route::get('following', 'FollowingController@index')->name('followingPage');
        Route::get('user/detail', 'user\UserDetailController@index')->name('showUserDetail');
        //update follow
        Route::get('detail/follow/{id}', 'UserController@updateFollower')->name('updateFollow');
        Route::get('detail/unfollow/{id}', 'UserController@unFollow')->name('unFollow');
});

require __DIR__.'/auth.php';
