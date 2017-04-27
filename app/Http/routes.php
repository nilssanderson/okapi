<?php

Route::controller('auth', 'Auth\AuthController', [
    'getLogin' => 'auth.login'
]);

Route::get('backend/dashboard', [
    'as' => 'backend.dashboard',
    'uses' => 'Backend\DashboardController@index' 
]);

// Route to Home page
Route::get('/', function() {
    return view('welcome');
    // return View::make('pages.home');
});

// Route to About page
Route::get('/about', function() {
    return View::make('pages.about');
});

// Route to Projects page
Route::get('/projects', function() {
    return View::make('pages.projects');
});

// Route to Contact page
Route::get('/contact', function() {
    return View::make('pages.contact');
});
