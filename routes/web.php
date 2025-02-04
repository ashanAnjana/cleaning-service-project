<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{name}', function($name) {
    return view('sample.home', ["name"=>$name]);
});