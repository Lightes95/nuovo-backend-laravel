<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\UtentiController;
use App\Http\Controllers\admin\AutoriController;
use App\Http\Controllers\admin\EditoriController;
use App\Http\Controllers\admin\PrestitiController;
use App\Http\Controllers\admin\LibriController;
use App\Http\Controllers\SearchController;

Route::get('', [HomeController::class, 'index']);
Route::resource('/utenti', UtentiController::class);
Route::resource('/autori', AutoriController::class);
Route::resource('/editori', EditoriController::class);
Route::resource('/prestiti', PrestitiController::class);
Route::resource('/books', LibriController::class);
Route::resource('/books/{id}', LibriController::class);

Route::match(
    ['get', 'post'],
    '/navbar/search',
    'SearchController@showNavbarSearchResults'
);
