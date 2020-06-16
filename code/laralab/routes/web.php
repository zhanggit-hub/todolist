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
    return view('welcome');
});

Route::any('/login','MyController@login');
Route::any('/loginCheck','MyController@loginCheck');
Route::any('/loginRegister','MyController@loginRegister');
Route::any('/add','MyController@add');
Route::any('/loginSuccess','MyController@loginSuccess');
Route::any('/insert','MyController@insert');
Route::any('/insert_homepage','MyController@insert_homepage');
Route::any('/out','MyController@out');
Route::any('/update_homepage','MyController@update_homepage');
Route::any('/delete_homepage','MyController@delete_homepage');

Route::any('/update_homepage_op','MyController@update_homepage_op');
Route::any('/accept','MyController@accept');
Route::any('/un_accept','MyController@un_accept');
Route::any('/todo','MyController@todo');
Route::any('/todolist','MyController@todolist');
Route::any('/add_list','MyController@add_list');
Route::any('/add_list_op','MyController@add_list_op');
Route::any('/listall','MyController@listall');
Route::any('/ing','MyController@ing');
Route::any('/listend','MyController@listend');
Route::any('/dellistend','MyController@dellistend');
Route::any('/update_list','MyController@update_list');
Route::any('/update_list_op','MyController@update_list_op');
Route::any('/delete_list','MyController@delete_list');
Route::any('/add_friend','MyController@add_friend');
Route::any('/delete_friend','MyController@delete_friend');




