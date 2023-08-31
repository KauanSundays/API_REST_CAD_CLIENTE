<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\http\Controllers\apiController;

Route::get('/', function () {

    $pai = Http::get('https://api.github.com/users/robertobarross/repos');
    $apiArray = $pai->json();
    return view('api', ['apiArray' => $apiArray]);
});
