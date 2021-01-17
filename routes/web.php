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


Route::get('/', 'Frontend\IndexController@index')->name('Home');
Route::get('/why-us', 'Frontend\AboutController@index')->name('Why Us?');

Route::get('/services', 'Frontend\ServicesController@index')->name('Services');

Route::get('/careers', 'Frontend\CareersController@index')->name('Careers');
Route::post('/send-career-form', 'Frontend\CareersController@mail');

Route::get('/news', 'Frontend\NewsController@index')->name('News');

Route::get('/get-a-free-quote', 'Frontend\GetAFreeQuoteController@index')->name('Get A Free Quote');
Route::post('/send-quote', 'Frontend\GetAFreeQuoteController@mail');

Route::get('/testimonial-form', 'Frontend\TestimonialController@index')->name('Testimonial');
Route::post('/send-testimonial', 'Frontend\TestimonialController@mail');
///Auth::routes();Auth::routes(['register' => false]);
Auth::routes(['login' => false]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
//Auth::routes(['verify' => true]);
Route::post('store-post', 'Backend\BlogController@store' );

Route::get('/news/1', 'Frontend\NewsController@page')->name('News');
