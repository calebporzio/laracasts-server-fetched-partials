<?php

use App\User;

Artisan::command('import-user-from-gh {username}', function ($username) {
    $opts = [
        'http' => [
            'method' => 'GET',
            'header' => [
                'User-Agent: PHP',
            ],
        ],
    ];

    $context = stream_context_create($opts);

    $user = json_decode(file_get_contents('https://api.github.com/users/'.$username, false, $context), true);

    User::firstOrCreate(['name' => $user['name']], [
        'name' => $user['name'],
        'username' => $user['login'],
        'avatar' => $user['avatar_url'],
        'bio' => $user['bio'] ?? '',
        'profile' => $user['html_url'],
    ]);
});
