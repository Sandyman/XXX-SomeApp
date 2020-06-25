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

Route::post('/register', 'API\AuthController@register');
Route::post('/login', 'API\AuthController@login');

Route::apiResource('/ceo', 'API\CEOController')->middleware('auth:api');

Route::middleware('auth:api')->group(function(){
    Route::post('details', 'API\AuthController@get_user_details_info');
});

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
