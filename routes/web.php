<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', [App\Http\Livewire\Comment\Index::class, 'render']);

Route::view('/','livewire.home');