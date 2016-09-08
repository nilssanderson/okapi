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

// Route to Home page
Route::get('/', function() {
    return View::make('pages.home');
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
