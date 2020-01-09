<?php

Route::get('/', function () {
    return view('sponsorships');
});

Route::get('/partials/developers', function () {
    $users = App\User::inRandomOrder()->limit(5)->get();

    return view('_developers', ['users' => $users]);
});
