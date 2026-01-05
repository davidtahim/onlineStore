<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    $viewData = []; 
    $viewData["title"] = "Home Page - Online Store"; 
    return view('home.index')->with("viewData", $viewData); 
}); 
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");