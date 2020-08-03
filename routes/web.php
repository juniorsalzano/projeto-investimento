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

// Route::get('/', function () {

//   return view('welcome');
// });


/**
 * Routes to user auth
 * =============================================================
*/

Route::get('/dashboard',['as' => 'user.dashboard' ,'uses' => 'DashboardController@index']);
Route::get('/login',    ['as' => 'user.login'     ,'uses' => 'DashboardController@formLogin']);
Route::post('/login/do',['as' => 'user.auth'      ,'uses' => 'DashboardController@auth']);

Route::resource('user', 'UsersController');
Route::resource('instituition', 'InstituitionsController');
Route::resource('group', 'GroupsController');
Route::resource('instituition.product', 'ProductsController');

Route::get('moviment', ['as' => 'moviment.application', 'uses' => 'MovimentsController@application']);

Route::post('group/{group_id}/user', ['as' => 'group.user.store', 'uses' => 'GroupsController@userStore']);
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
