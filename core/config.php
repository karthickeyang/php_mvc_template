<?php

ini_set('display_errors', 1);

return [
    'database' => [
        'name' => 'mytodo',
        'username'=> 'root',
        'password' => 'demo',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];