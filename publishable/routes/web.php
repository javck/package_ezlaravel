<?php

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

Route::get('/', 'SiteController@renderHomePage');
Route::get('/news', 'SiteController@renderNewsPage');
Route::get('/about', 'SiteController@renderAboutPage');
Route::get('/search', 'SiteController@renderSearchPage');

Route::group(['middleware' => ['web']], function () {
    if(setting('admin.useRegisterActivate') == true){
        Auth::routes(['verify' => true]);
    }else{
        Auth::routes();
    }
    Route::get('login', ['uses' => 'Auth\VoyagerAuthController@login', 'as' => 'login']);
    Route::post('login', ['uses' => 'Auth\VoyagerAuthController@postLogin', 'as' => 'postLogin']);
    Route::post('logout', ['uses' => 'Auth\VoyagerAuthController@logout', 'as' => 'logout']);
    Route::get('admin/login', ['uses' => 'Auth\VoyagerAuthController@login', 'as' => 'voyager.login']);
    Route::post('admin/login', ['uses' => 'Auth\VoyagerAuthController@postLogin', 'as' => 'voyager.postlogin']);
    Route::post('admin/logout', ['uses' => 'Auth\VoyagerAuthController@logout', 'as' => 'voyager.logout']);
});

//自定義後台路由規則
Route::group(['prefix' => 'admin','namespace' => '\App\Http\Controllers','middleware' => ['web','javck.roleCheck','javck.verifyEnabled']],function () {

    
});
