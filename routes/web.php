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

Route::get('/', function () {
    return view('frontend.pages.home');
});

Route::get('/about', 'Frontend\AboutController@index')->name('About');

Route::get('/services', 'Frontend\ServicesController@index')->name('Services');

Route::get('/news', 'Frontend\NewsController@index')->name('News');

Route::get('/get-a-free-quote', 'Frontend\GetAFreeQuoteController@index')->name('Get A Free Quote');
Route::post('/send-quote', 'Frontend\GetAFreeQuoteController@mail');

Route::get('/write-a-testimonial', 'Frontend\TestimonialController@index')->name('Write a Testimonial');
Route::post('/send-testimonial', 'Frontend\TestimonialController@mail');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Auth::routes(['verify' => true]);

