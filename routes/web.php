<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    if(session()-> has('user'))
    {
        return redirect('/insert');
    }
    else{
        return view('login');
    }
});
Route::post('/login','UserAuth@login');
Route::get('/logout','UserAuth@logout');
Route::view('/registration','registration');
Route::post('/registration','UserAuth@registration');

Route::get('/insert', function () {
    return view('insert');
});

Route::post('/store','PostController@store');
Route::get('/show','PostController@show');
Route::get('/delete/{id}','PostController@destroy');
Route::get('/update/{id}','PostController@edit');
Route::post('/update/{id}','PostController@update');

// ajax
Route::get('/ajax','AjaxController@index');
Route::post('/ajax','AjaxController@store');
Route::get('/fetch-students','AjaxController@fetchstudent');
Route::get('/edit-student/{id}','AjaxController@edit');