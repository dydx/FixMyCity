<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 | Need routes for:
 | index - main
 | index - submit
 | dashboard - main
 | dashboard - item view
 |
 | dashboard is going to use keen.io templates
 | need to add Elixir scripts for bootstrap and keen.io
 */

Route::get('/', 'ClientApp@index');


Route::get('dashboard', 'AdminDashboard@index');
Route::get('/ticket/{id}', 'AdminDashboard@show');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);