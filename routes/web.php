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


Auth::routes();

Route::prefix('home')->group(function (){
//    Local start
    Route::get('/local','HomeController@localiz')->name('localiz');
    Route::get('/loc_del/{id?}','HomeController@loc_del')->name('loc_del');
    Route::get('/income', 'HomeController@income')->name('income');
    Route::get('/collegs', 'HomeController@collegs')->name('collegs');
    Route::get('/video', 'HomeController@video')->name('video');
    Route::get('/service', 'HomeController@service')->name('service');
    Route::get('/product', 'HomeController@product')->name('product');
    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/files', 'HomeController@files')->name('files');
    Route::get('/slider', 'HomeController@file_slider')->name('file_slider');
    Route::get('/clients', 'HomeController@clients')->name('clients');
    Route::get('/dis/slider/{id}', 'HomeController@slider_dis')->name('slider_dis');
    Route::get('/income/visible/{id}', 'HomeController@income_vis')->name('income_vis');
    Route::get('/income/re_visible/{id}', 'HomeController@income_re_vis')->name('income_vis');
    Route::get('/active/slider/{id}', 'HomeController@slider_active')->name('slider_active');
    Route::get('/del/slider/{id}', 'HomeController@slider_del')->name('slider_del');
    Route::get('/income/Delete/{id}', 'HomeController@income_del')->name('income_del');
    Route::get('/edit_show/slider/{id}', 'HomeController@slider_show')->name('slider_show');
    Route::get('/video_show/video/{id}', 'HomeController@video_show')->name('video_show');
    Route::get('/edit_show/client/{id}', 'HomeController@client_show')->name('client_show');


    Route::post('/changeLoc','HomeController@changeLoc')->name('changeLoc');
    Route::post('/addLoc','HomeController@addLoc')->name('addLoc');
    Route::post('/sendCollegsHeader','AdminController@sendCollegsHeader')->name('sendCollegsHeader');
    Route::post('/sendCollegs','AdminController@sendCollegs')->name('sendCollegs');
    Route::post('/sendClients','AdminController@sendClients')->name('sendClients');
    Route::post('/sendVideo','AdminController@sendVideo')->name('sendVideo');
    Route::post('/sendProduct','AdminController@sendProduct')->name('sendProduct');
    Route::post('/sendAbout','AdminController@sendAbout')->name('sendAbout');
    Route::post('/sendService','AdminController@sendService')->name('sendService');
    Route::post('/footerSlider','AdminController@footerSlider')->name('footerSlider');
    Route::post('/updateSlider','AdminController@updateSlider')->name('updateSlider');
    Route::post('/updateClient','AdminController@updateClient')->name('updateClient');
    Route::post('/updateVideo','AdminController@updateVideo')->name('updateVideo');
    Route::post('upload','AdminController@Upload')->name('upload');
    Route::post('/delete','AdminController@Delete')->name('Delete');
    Route::post('/sendSlider','AdminController@sendSlider')->name('sendSlider');
    Route::post('/add_file','AdminController@add_file')->name('add_file');
    Route::post('/onlineTrans','AdminController@onlineTrans')->name('onlineTrans');
});

Route::group(['prefix'=>'{lang?}'],function(){
    Route::get('/', 'Controller@index')->name('home1');
    Route::get('/info/{id}', 'Controller@one_prod')->name('home2');
    Route::post('/form', 'Controller@form')->name('forms');
});
