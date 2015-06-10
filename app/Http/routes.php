<?php

get('/jstest', function () {
    return view('jstest');
});

Route::get('/', 'HomeController@index');

Route::get('/dashboard', 'Admin\DashboardController@index');

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
