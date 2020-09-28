<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::get("login/{website}", "Auth\LoginController@redirectToProvider");
    Route::get("login/google/callback", "Auth\LoginController@handleProviderCallback");
});