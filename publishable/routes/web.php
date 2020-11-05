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
Route::group(['prefix' => '/demo','namespace' => '\App\Http\Controllers'], function () {
    Route::get('/', 'SiteController@renderHomePage');
    Route::get('/services', 'SiteController@renderServicesPage');
    Route::get('/articles/{cgy}', 'SiteController@renderCgyArticlesPage');
    Route::get('/article/{article}', 'SiteController@renderArticlePage');
    Route::get('/about', 'SiteController@renderAboutPage');
    Route::get('/contact', 'SiteController@renderContactPage');
    Route::get('/thank', 'SiteController@renderThankPage');
    Route::get('/policy', 'SiteController@renderPolicyPage');
    Route::get('/portfolio','SiteController@renderPortfolioPage');
    Route::get('/portfolio/{media}', 'SiteController@renderPortfolioDetailPage');
    Route::post('/save','SiteController@save');
});

Route::get('/','\App\Http\Controllers\SiteController@renderWelcomePage');


//自定義後台路由規則
Route::group(['prefix' => 'admin', 'namespace' => '\App\Http\Controllers', 'middleware' => ['web', 'javck.roleCheck', 'javck.verifyEnabled']], function () {
});
