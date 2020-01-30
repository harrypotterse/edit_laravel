<?php


Route::prefix('vendor')->name('vendor.')->group(function() {

Route::get('/', 'HomeController@index');

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


