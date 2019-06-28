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
Route::group(['middleware' => ['javck.checkForMaintenanceMode']
    ,'namespace' => 'Javck\Easyweb2\Controllers',], function () {
    Route::post('/submitContact', 'ContactController@save');

    Route::prefix('articles')->group(function () {
        Route::post('{id}/comment', 'MyVoyagerArticleController@comment');
        Route::get('{id}', 'MyVoyagerArticleController@show');
        Route::get('{id}/download/{index}', 'MyVoyagerArticleController@download');
    });

    Route::prefix('shop')->group(function () {
        Route::match(['get', 'post'], 'addCart', 'ShopController@addCart');
        Route::get('showCart', 'ShopController@showCart');
        Route::get('createCheckout', 'ShopController@createCheckout');
        Route::post('submitCheckout', 'ShopController@submitCheckout');
    });
});


Route::get('/404-page', function () {
    return view('404-page');
});

//後台====================================
//Route::group(['prefix' => 'admin','namespace' => 'Javck\Easyweb2\Controllers','middleware' => ['javck.roleCheck','javck.verifyEnabled']],function () {
Route::group(['prefix' => 'admin','namespace' => 'Javck\Easyweb2\Controllers','middleware' => ['javck.roleCheck','javck.verifyEnabled','web']],function () {
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

Route::group(['namespace' => 'App\Http\Controllers','middleware'=>['web']],function () {
    Route::get('login', ['uses' => 'Auth\VoyagerAuthController@login','as' => 'login']);
    Route::post('login', ['uses' => 'Auth\VoyagerAuthController@postLogin','as' => 'postLogin']);
    Route::get('admin/login', ['uses' => 'Auth\VoyagerAuthController@login', 'as' => 'voyager.login']);
    Route::post('admin/login', ['uses' => 'Auth\VoyagerAuthController@postLogin', 'as' => 'voyager.postlogin']);
});
