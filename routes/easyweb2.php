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

//測試用==============================================================
//用來查詢Client當前IP
Route::get('/myip',function(){
     dd(Request::getClientIp());
});

// Route::get('sendmail', function() {
//     $data = ['name' => 'Test'];
//     Mail::send('pages.notify', $data, function($message) {
//         $message->to('javck.zack@gmail.com')->subject('This is test email');
//     });
//     return 'Your email has been sent successfully!';
// });

//Route::get('pass',function(){
//    return bcrypt('874260582qq');
//});

//前台====================================
Route::group(['middleware' => ['javck.checkForMaintenanceMode','web']
    ,'namespace' => '\Javck\Easyweb2\Http\Controllers'], function () {
    Route::post('/submitContact', 'MyVoyagerContactController@save');
    Route::get('/search', 'SiteController@renderSearchPage');

    Route::prefix('articles')->group(function () {
        Route::post('{id}/comment', 'MyVoyagerArticleController@comment');
        Route::get('{id}', 'MyVoyagerArticleController@show');
        Route::get('{id}/download/{index}', 'MyVoyagerArticleController@download');
    });

    Route::prefix('shop')->group(function () {
        Route::group(['middleware' => ['auth']], function () {
            Route::get('createCheckout', 'ShopController@createCheckout');
            Route::post('submitCheckout', 'ShopController@submitCheckout');
        });
        Route::match(['get', 'post'], 'addCart', 'ShopController@addCart');
        Route::get('/cgy/{cgy}','ShopController@renderShopPage');
        Route::get('showCart','ShopController@showCart');
    });

    Route::get('/thank', function () {
        return view('easyweb2::pages.thankyou');
    });
    Route::get('/policy', function () {
        return view('policy');
    });
});


Route::get('/404-page', function () {
    return view('404-page');
});



Route::group(['namespace' => 'App\Http\Controllers','middleware'=>['web']],function () {
    Auth::routes();
    Route::get('login', ['uses' => 'Auth\VoyagerAuthController@login','as' => 'login']);
    Route::post('login', ['uses' => 'Auth\VoyagerAuthController@postLogin','as' => 'postLogin']);
    Route::get('login/{provider}', 'Auth\VoyagerAuthController@redirectToProvider');
    Route::get('login/{provider}/callback', 'Auth\VoyagerAuthController@handleProviderCallback');
    Route::get('admin/login', ['uses' => 'Auth\VoyagerAuthController@login', 'as' => 'voyager.login']);
    Route::post('admin/login', ['uses' => 'Auth\VoyagerAuthController@postLogin', 'as' => 'voyager.postlogin']);
    Route::post('admin/logout', ['uses' => 'Auth\VoyagerAuthController@postLogin', 'as' => 'voyager.logout']);
    Route::get('suppleregister','Auth\RegisterController@supplementRegistrationForm');
    Route::post('suppleregister','Auth\RegisterController@supplementRegistration');
    Route::get('activate','Auth\RegisterController@registerActivate');
});

//後台====================================
//Route::group(['prefix' => 'admin','namespace' => 'Javck\Easyweb2\Controllers','middleware' => ['javck.roleCheck','javck.verifyEnabled']],function () {
Route::group(['prefix' => 'admin','namespace' => '\Javck\Easyweb2\Http\Controllers','middleware' => ['web','javck.roleCheck','javck.verifyEnabled']],function () {
    Voyager::routes();
    Route::prefix('elements')->group(function () {
        Route::get('del/{id}', 'MyVoyagerElementController@destroy');
        Route::get('copy/{id}', 'MyVoyagerElementController@copy');
    });
    Route::prefix('articles')->group(function () {
        Route::get('del/{id}', 'MyVoyagerArticleController@destroy');
        Route::get('copy/{id}', 'MyVoyagerArticleController@copy');
    });
    Route::prefix('medias')->group(function () {
        Route::get('del/{id}', 'MyVoyagerMediaController@destroy');
        Route::get('copy/{id}', 'MyVoyagerMediaController@copy');
    });
    Route::get('reset/{model}','MyVoyagerBaseController@reset');
});

//API======================================
Route::group(['middleware' => 'api','prefix' => 'api'],function(){
    Route::group(['namespace' => '\Javck\Easyweb2\Http\Controllers'],function () {
        Route::get('items/show','ApiController@showSingleItem');
        Route::get('items/{item}','ApiController@queryItem');
        //Official
        Route::post('areas/queryByCounty','ApiController@queryAreas');
        Route::post('elements/queryPositions','ApiController@queryPositions');
        Route::post('elements/queryElementModes','ApiController@queryElementModes');
    });
});

Route::group(['middleware' => 'web','prefix' => 'api'],function(){
    Route::group(['namespace' => '\Javck\Easyweb2\Http\Controllers'],function () {
        Route::get('page/loadTopCart','ApiController@loadTopCart');
        Route::get('shop/addCart','ShopController@addCart');
        Route::get('shop/updateCart','ShopController@updateCart');
        Route::get('shop/removeCart','ShopController@removeCart');
        Route::get('shop/clearCart','ShopController@clearCart');
        Route::get('shop/getCart','ShopController@getCart');
    });
});

