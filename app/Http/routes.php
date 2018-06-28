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

Route::get('/','PagesController@index');
Route::get('/apply','PagesController@apply');
Route::get('/pricing','PagesController@pricing');
Route::get('/login','PagesController@login');
Route::get('/user/update_details/{id}','PagesController@details');
//Route::resource('apply','ApplyController');
//Route::post('/apply/store','ApplyController@store');
Route::post('/apply/store',
    [
        'uses'=>'PagesController@submit',
        'as'=>'apply',
    ]);
Route::post('/user/store','PagesController@organization');
Route::post('user/login','PagesController@userlogin');
Route::get('/thanks','PagesController@thanks');

//////////////////////////////////////////////
Route::get('/admin/dashboard','AdminController@dashboard');