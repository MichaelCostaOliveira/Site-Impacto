<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\HomeController::class, 'index'])
->name('home');

Route::get('/gallery', [\App\Http\Controllers\GalleryController::class, 'index'])
->name('galeria');



