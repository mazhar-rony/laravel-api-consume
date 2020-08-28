<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', 'ProfileController@getApiData');