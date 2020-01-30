<?php

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth','Admin'])->group(function() {

Route::get('/', 'HomeController@index');

Route::resource('wcategory', 'WcategoryController');

Route::resource('rwedding', 'RweddingController');

Route::resource('category', 'CategoryController');

Route::resource('blog', 'BlogController');

Route::resource('partner', 'PartnerController');

Route::resource('advise', 'AdviseController');

Route::resource('test', 'TestController');

Route::resource('price', 'PriceController');

Route::resource('vendor', 'VendorController');

Route::resource('scategory', 'ScategoryController');

Route::resource('service', 'ServiceController');

Route::resource('order', 'OrderController');

Route::get('slider', 'HomeController@getslider')->name('slider');

Route::get('editslider/{id}', 'HomeController@editslider')->name('editslider');

Route::put('updateslider', 'HomeController@updateslider')->name('updateslider');

Route::get('about', 'HomeController@about')->name('about');

Route::resource('mail', 'ContactController');

Route::resource('profile', 'ProfileController');

Route::resource('users', 'UsersController');

Route::resource('about', 'AboutController');

});

});

