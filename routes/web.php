<?php

/**
 * Server-fetched Partials
 */

use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/partials/sponsorships', function () {
    return view('_sponsorships', [
        'users' => User::inRandomOrder()->limit(5)->get(),
    ]);
});
