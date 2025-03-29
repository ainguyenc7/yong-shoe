<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

require __DIR__ . '/admin.php';


Route::get('/', function () {
    return view('store-front.index');
});
