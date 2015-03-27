<?php

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'dashboard'
]);

// Route::get('/dashboard', 'Admin\DashboardController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
