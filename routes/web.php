<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/angular-app/{any}', function () {
    return view('angular-app');
})->where('any', '.*');
