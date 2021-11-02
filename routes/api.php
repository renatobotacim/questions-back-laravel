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

$router->group(['prefix' => "/v1/questions", 'namespace' => 'V1'], function () use ($router) {
    $router->get("/", "questionsController@getAll");
    $router->get("/filter/{id}", "questionsController@getAllFilter");
    $router->get("/{id}", "questionsController@get");
    $router->post("", "questionsController@create");
    $router->put("/{id}", "questionsController@update");
    $router->delete("/{id}", "questionsController@delete");
});

$router->group(['prefix' => "/v1/dimensions", 'namespace' => 'V1'], function () use ($router) {
    $router->post("", "dimensionsController@create");
    $router->get("", "dimensionsController@getAll");
    $router->get("/{id}", "dimensionsController@get");
    $router->put("/{id}", "dimensionsController@update");
    $router->delete("/{id}", "dimensionsController@delete");
});
