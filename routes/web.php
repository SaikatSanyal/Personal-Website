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


Route::get ('/','HomePageController@index')->name('welcome');
Route::get ('/images/file','ImageController@index')->name('images.file');
Route::get ('/admin/timeline','TimeLineController@index')->name('admin.timeline');
Route::post ('/images/store','ImageController@store')->name('images.store');
Route::get ('/images/download','DownloadController@downloadTemplate')->name('cv.download');
Route::get ('/images/about','DownloadController@about')->name('images.about');
Route::post ('/images/store','MessageController@store')->name('images.store');
Route::get ('/admin/index','AdminController@index')->name('admin.index')->middleware('auth');

Auth::routes();
Route::get ('/experience/create','AdminController@create')->name('experience.create')->middleware('auth');
Route::post ('/experience/store','AdminController@store')->name('experience.store')->middleware('auth');
Route::get ('/experience/edit/{id}','AdminController@edit')->name('experience.edit')->middleware('auth');
Route::patch ('/experience/update/{id}','AdminController@update')->name('experience.update')->middleware('auth');
Route::delete('experience/delete/{id}','AdminController@destroy')->name('experience.delete')->middleware('auth');
Route::get ('/general_info/edit/{id}','AdminController@editGeneral_Info')->name('general_info.edit')->middleware('auth');
Route::patch ('/general_info/update/{id}','AdminController@updateGeneral_Info')->name('general_info.update')->middleware('auth');
Route::get ('/skill /edit/{id}','AdminController@editSkill')->name('skill.edit')->middleware('auth');
Route::patch ('/skill/update/{id}','AdminController@updateSkill')->name('skill.update')->middleware('auth');
Route::get ('/skill/create','AdminController@skillCreate')->name('skill.create')->middleware('auth');
Route::post ('/skill/store','AdminController@skillStore')->name('skill.store')->middleware('auth');
Route::get ('/timelines/create','AdminController@createTimeLine')->name('timelines.create')->middleware('auth');
Route::post ('/timelines/store','AdminController@storeTimeLine')->name('timelines.store')->middleware('auth');
Route::get ('/timelines/edit/{id}','AdminController@editTimeLine')->name('timelines.edit')->middleware('auth');
Route::patch ('/timelines/update/{id}','AdminController@updateTimeLine')->name('timelines.update')->middleware('auth');






// Route::get('/experience/create', 'ExperienceController@create')->name('experience.create');
// Route::get('/experience/data', 'ExperienceController@indexData')->name('experience.data');
// Route::post('/experience/store', 'ExperienceController@store')->name('experience.store');
