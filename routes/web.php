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

Route::get('v/{unique_id}/{category_sluq}/{product_sluq}/','HomeController@product_page')->name('home.product_page');
Route::get('c/{unique_id}/{sluq}', 'HomeController@category_page')->name('home.category_page');

Route::get('get-in-touch', 'HomeController@get_in_touch')->name('home.get_in_touch');
Route::get('our-story','HomeController@our_story')->name('home.our_story');

Route::get('switcher/{language}','HomeController@switcher')->name('home.switcher');

Route::post('contact-submit', 'HomeController@submit_contact')->name('contact.submit');
Route::post('newsletter-submit', 'HomeController@submit_newsletter')->name('newsletter.submit');

Route::prefix('administrator')->group(function() {

    Route::prefix('dashboard')->group(function() {
        Route::get('/', 'AdministratorController@dashboard')->name('administrator.home');
    });
    
    Route::prefix('products')->group(function() {    

        Route::get('/', 'AdministratorController@products')->name('administrator.products');
        Route::get('add', 'AdministratorController@add_products')->name('administrator.add_products');
        Route::get('edit/{id}', 'AdministratorController@edit_product_page')->name('administrator.edit_category_page');

        Route::post('upload', 'AdministratorController@upload_product')->name('administrator.upload.product');
        Route::get('get', 'AdministratorController@get_products')->name('administrator.get_products');
        Route::post('store', 'AdministratorController@store_products')->name('administrator.store_products');
        Route::post('edit', 'AdministratorController@edit_products')->name('administrator.edit_products');
        Route::post('delete', 'AdministratorController@delete_product')->name('administrator.delete_products');

    });

    Route::prefix('category')->group(function() {

        Route::get('/', 'AdministratorController@category')->name('administrator.category');
        Route::get('add', 'AdministratorController@add_category')->name('administrator.add_category');
        Route::get('edit/{id}', 'AdministratorController@edit_category_page')->name('administrator.edit_category_page');
        
        Route::post('upload', 'AdministratorController@upload_category')->name('administrator.category.upload');
        Route::get('get', 'AdministratorController@get_categories')->name('administrator.get_categories');
        Route::post('store', 'AdministratorController@store_category')->name('administrator.store_category');
        Route::post('edit', 'AdministratorController@edit_category')->name('administrator.edit_category');
        Route::delete('delete', 'AdministratorController@delete_categeory')->name('administrator.delete_category');

    });

    Route::prefix('contacts')->group(function() {

        Route::get('/', 'AdministratorController@contacts')->name('administrator.contacts');

        Route::get('get', 'AdministratorController@get_contacts')->name('administrator.get_contacts');
        Route::delete('/', 'AdministratorController@delete_contaact')->name('administrator.delete_contact');
    });

    Route::prefix('subscribe')->group(function() {

        Route::get('/', 'AdministratorController@subscribe')->name('administrator.subscribe');

        Route::get('get', 'AdministratorController@get_subscribers')->name('administrator.get_subscribers');
        Route::delete('/', 'AdministratorController@delete_subscriber')->name('administrator.delete_subscriber');
    });

    Route::get('/', 'AdministratorController@subscribe')->name('administrator.logout');

});