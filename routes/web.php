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

Route::get('/','HomeController@index')->name('home.index');

Route::get('our-products','HomeController@our_products')->name('home.our_products');
Route::get('get-in-touch', 'HomeController@get_in_touch')->name('home.get_in_touch');
Route::get('our-story','HomeController@our_story')->name('home.our_story');

Route::get('switcher/{language}','HomeController@switcher')->name('home.switcher');

Route::post('contact-submit', 'HomeController@submit_contact')->name('contact.submit');
Route::post('newsletter-submit', 'HomeController@submit_newsletter')->name('newsletter.submit');