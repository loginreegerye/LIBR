<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('users', 'UserController@getAllPaginate');
Route::get('books', 'BookController@getAllPaginate');

Route::resource('user', 'UserController');
Route::resource('book', 'BookController');

Route::get('user/{id}/add', 'BookController@getAvailableToAdd');
Route::get('book/{id}/add', 'UserController@getAllToAdd');

Route::put('user/{user_id}/add/{book_id}', 'BookController@addBookToUser');
Route::put('book/{book_id}/add/{user_id}', 'BookController@addUserToBook');

Route::delete('user/{user_id}/del/{book_id}', 'BookController@deleteBookFromUser');
Route::delete('book/{book_id}/del/{user_id}', 'BookController@deleteUserFromBook');
