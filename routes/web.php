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
*/

Route::get('/', function () {
    return view('health-assessment.index');
});

Route::get('/assessment','MainController@displayAssessment')->name('assess');
Route::get('/listahan','MainController@displayListahan')->name('listahan');
Route::get('/patingin/{id}','MainController@editAngPasyente')->name('patingin');
Route::post('/bwehehe','MainController@addData')->name('seeend');