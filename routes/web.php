<?php

Route::get('/', function () {
    $users = App\User::inRandomOrder()->limit(5)->get();

    return view('sponsorships', ['users' => $users]);
});
