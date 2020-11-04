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
Route::group(['namespace' => '\App\Http\Controllers'], function () {
    Route::get('/', 'SiteController@renderHomePage');
    Route::get('/welcome', 'SiteController@renderWelcomePage');
    Route::get('/demo', 'SiteController@renderDemoPage');
    Route::get('/news', 'SiteController@renderNewsPage');
    Route::get('/about', 'SiteController@renderAboutPage');
    Route::get('/search', 'SiteController@renderSearchPage');
    Route::get('/thank', 'SiteController@renderThankPage');
    Route::get('/policy', 'SiteController@renderPolicyPage');
});


//自定義後台路由規則
Route::group(['prefix' => 'admin', 'namespace' => '\App\Http\Controllers', 'middleware' => ['web', 'javck.roleCheck', 'javck.verifyEnabled']], function () {
});
