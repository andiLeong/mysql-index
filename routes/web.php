<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    \App\Jobs\Seed::dispatch();
    return view('welcome');
});
