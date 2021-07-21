<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/user', function () {
    return $request->user();
})->middleware('auth:api');


Route::apiResource('event', 'EventAPIController');
//Route::apiResource('tagin', 'TaginController');
Route::resource('/welcome', 'VenueAPIController');
Route::post("login", "AuthController@login");
Route::post("register", "AuthController@register");

Route::group(["middleware" => "auth.jwt"], function () {
    Route::post("logout", "AuthController@logout");
    Route::resource("tasks", "TaskController");  
    Route::resource('customers', 'CustomerController')->except(['create', 'edit']);
    Route::apiResource('venue', 'VenueAPIController');
    Route::apiResource('eventlist', 'EventAPIController');
    // Route::apiResource('users', 'UserAPIController');
});

Route::get('/testing/{mytest}', 'TestingController@index');