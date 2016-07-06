<?php

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    
    Route::get('/', 'HomeController@index');
    
    Route::resource('videos', 'VideoController');
    
    Route::resource('topics', 'TagController');
    
    Route::get('search', 'SearchController@search');
    
    Route::get('search_array', 'SearchController@search_array');

    Route::get('about', function() {
	    return view('about');
    });


});
