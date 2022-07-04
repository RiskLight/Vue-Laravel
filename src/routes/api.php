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

Route::group([
    'namespace' => 'Dog',
    'prefix' => 'dogs'
],  function () {
    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/{dog}', 'ShowController');
    Route::patch('/{dog}', 'UpdateController');
    Route::delete('/{dog}', 'DeleteController');
});
