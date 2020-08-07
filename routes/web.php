<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'clinicaController@index');

Route::group(['prefix' => 'clinica'], function () {
    Route::post('agendamento', "clinicaController@store");
    Route::get('profissionais/{id}', "clinicaController@getProfissionais");
    Route::get('indicacao', "clinicaController@getIndicacao");
});
