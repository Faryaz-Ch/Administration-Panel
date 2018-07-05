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

Route::get('/','HomeController@index')->name('welcome');

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'],function (){

    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
    Route::resource('tutor','TutorController');
    Route::resource('pathway','PathwayController');
    Route::resource('projects','ProjectsController');
    Route::resource('student','StudentController');
    Route::post('student/search', 'StudentController@search')->name('student.search');
    Route::resource('techadmin','TechadminController');

});