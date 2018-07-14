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
Route::get('/admin/workers','AdminController@workers');
Route::post('/admin/addworker/','AdminController@addworker');
Route::post('/admin/addcategory/','AdminController@addcategory');
Route::get('/admin/editworker/{id}','AdminController@editworker');
Route::post('/admin/updateworker/{id}','AdminController@updateworker');
Route::get('/admin/subadmin','AdminController@subadmin');
Route::post('/admin/addadmin/','AdminController@addadmin');

/////////////////////////////////////////////
//////////////User API//////////////////////
Route::post('/user/register/first','UserController@register_first');
Route::post('/user/register/second','UserController@register_second');
Route::post('/user/organizations','UserController@get_org');
Route::post('/user/login','UserController@login');
Route::post('/user/complaints','UserController@complaints');
Route::post('/user/complaints/register','UserController@make_complain');
Route::post('/user/complaints/previous','UserController@check_complaints');
Route::post('/user/complaints/status','UserController@complaint_status');
Route::post('/user/leave/apply','UserController@apply_leave');
Route::post('/user/leave/previous','UserController@check_leave');
Route::get('/user/leave/{id}','UserController@particular_leave');