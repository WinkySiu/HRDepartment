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

Route::get('/', 'HomeController@interface_init');

Route::get('/login', 'LoginController@interface_init');

Route::get('/analysis', 'AnalysisController@interface_init');

Route::get('/manage', 'ManageController@interface_init');

Route::get('/form_maker', 'FormMakerController@interface_init');

Route::get('/form', 'FormController@interface_init');
