<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ArgomentiController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\UtentiController;
use App\Http\Controllers\admin\AutoriController;
use App\Http\Controllers\admin\EditoriController;
use App\Http\Controllers\admin\PrestitiController;
use App\Http\Controllers\admin\LibriController;
use App\Http\Controllers\SearchController;

Route::get('', [HomeController::class, 'index']);
Route::resource('/users', UtentiController::class);
Route::resource('/authors', AutoriController::class);
Route::resource('/publisher', EditoriController::class);
Route::resource('/loans', PrestitiController::class);
Route::resource('/books', LibriController::class);
Route::resource('/topics', ArgomentiController::class);


Route::match(
    ['get', 'post'],
    '/navbar/search',
    'SearchController@showNavbarSearchResults'
);
