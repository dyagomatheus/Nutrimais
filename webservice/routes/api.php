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

Route::group(['middleware'=>['cors', 'auth:api']], function () {
  Route::get('/user', function (Request $request) {
      return $request->user();
  })->middleware('auth:api');


  Route::resource('/pacients', 'Api\PacientsController');
  Route::resource('/exams', 'Api\ExamsController');
  Route::resource('/plano_alimentar', 'Api\FoodPlansController');
  Route::resource('/detalhes/refeicao', 'Api\MealsController');
});
