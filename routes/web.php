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
Route::get('/myip', function () {
    dd(Request::getClientIp());
});

//用來測試寄信功能
Route::get('sendmail', function () {
    $data = ['name' => 'Test'];
    Mail::send('pages.notify', $data, function ($message) {
        $message->to(setting('admin.admin_mail'))->subject('This is test email');
    });
    return 'Your email has been sent successfully!';
});

//前台====================================
Route::group([
    'middleware' => ['javck.checkForMaintenanceMode', 'web'], 'namespace' => '\Javck\Ezlaravel\Http\Controllers'
], function () {
    Route::post('/submitContact', 'MyVoyagerContactController@save');

    Route::prefix('articles')->group(function () {
        Route::post('{id}/comment', 'MyVoyagerArticleController@comment');
        Route::get('{id}', 'MyVoyagerArticleController@show');
        Route::get('{id}/download/{index}', 'MyVoyagerArticleController@download');
    });
});

Route::view('/404-page', '404-page');

//後台====================================
$middleware = ['web', 'javck.roleCheck', 'javck.verifyEnabled'];
if (Schema::hasTable('settings')) {
    if (setting('admin.useRegisterActivate') == true) {
        $middleware = ['web', 'javck.roleCheck', 'javck.verifyEnabled', 'verified'];
    }
}

Route::group(['prefix' => 'admin', 'namespace' => '\Javck\Ezlaravel\Http\Controllers', 'middleware' => $middleware], function () {
    Voyager::routes();
    Route::prefix('elements')->group(function () {
        Route::match(['delete', 'get'], 'del/{id}', 'MyVoyagerElementController@destroy')->name('voyager.elements.del');
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
    Route::get('reset/{model}', 'MyVoyagerBaseController@reset');
});
Route::get('admin/voyager-assets', 'TCG\Voyager\Http\Controllers\VoyagerController@assets')->name('voyager.voyager_assets')->middleware(['web']);

//API======================================
Route::group(['middleware' => 'api', 'prefix' => 'api'], function () {
    Route::group(['namespace' => '\Javck\Ezlaravel\Http\Controllers'], function () {
        Route::get('items/show', 'ApiController@showSingleItem');
        Route::get('items/{item}', 'ApiController@queryItem');
        //Official
        Route::post('areas/queryByCounty', 'ApiController@queryAreas');
        Route::post('elements/queryPositions', 'ApiController@queryPositions');
        Route::post('elements/queryElementModes', 'ApiController@queryElementModes');
    });
});
