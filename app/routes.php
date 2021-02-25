<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//登录注销
Route::get('/login','UserController@Login');
Route::post('/login',"UserController@DoLogin");
Route::get('/logout','UserController@Logout');


//后台路由
Route::resource('/adm/user','UserController',array('except'=>array('show','edit')));//用户管理
Route::controller('/adm/survey','SurveyController');//问卷记录管理
Route::get('/adm/{other?}',array('before'=>'auth','uses'=>'HomeController@adminIndex'));//后台首页


//前台页路由
Route::get('/{email?}','SurveyController@Survey' );
Route::post('/','SurveyController@SubmitSurvey');

