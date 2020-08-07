<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {

    Route::get('/tweets', 'TweetController@index')->name('home');
    Route::post('/tweets', 'TweetController@store');
    Route::post('/profiles/{user:username}/follow', 'FollowsController@store');
    Route::get('/profiles/{user:username}/edit', 'ProfilesController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', 'ProfilesController@update')->middleware('can:edit,user');
    Route::get('/explore', 'ExploreController@index');
});

    Route::get('/profiles/{user:username}', 'ProfilesController@show')->name('profile');


    

Auth::routes();
