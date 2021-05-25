<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => '\Javck\Ezlaravel\Http\Controllers'], function () {
    Route::get('items/show', 'ApiController@showSingleItem');
    Route::get('items/{item}', 'ApiController@queryItem');
    //Official
    Route::post('areas/queryByCounty', 'ApiController@queryAreas');
    Route::post('elements/queryPositions', 'ApiController@queryPositions');
    Route::post('elements/queryElementModes', 'ApiController@queryElementModes');
});
