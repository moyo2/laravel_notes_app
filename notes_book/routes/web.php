<?php

use App\Http\Controllers\welcomecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [welcomecontroller::class,'welcome'])->name('welcome');
