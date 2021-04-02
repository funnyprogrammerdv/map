<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('index');
});

Route::get('/registr', function () {
    return view('registr');
});
Route::get('/autoriz', function () {
    return view('autoriz');
});
Route::get('/mainapp', function () {
    return view('mainapp');
});
Route::post('/mainapp/submit', 'AddLocationController@addlocation')->name('add-form');
Route::post('/registr/submit', 'myusersController@addusers')->name('add-users');


Route::get('mainapp', 'AddLocationController@alllocation')->name('all-locate');


Route::get('locateupdate/{id}', 'AddLocationController@updatelocation')->name('locate-update');
Route::post('locateupdate/{id}', 'AddLocationController@updatelocationsubmit')->name('locate-update-submit');

Route::get('locateupdate/{id}/delete', 'AddLocationController@deletelocation')->name('locate-delete');

Route::post('/autoriz', 'AuthController@postLogin')->name('Auth-user');



