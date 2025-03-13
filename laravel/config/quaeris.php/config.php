<?php

return [
    'name' => 'Quaeris',
    'icon' => 'heroicon-o-chart-bar',
    'limesurvey' => [
        'api' => [
            'url' => env('LIMESURVEY_URL', ''),
            'username' => env('LIMESURVEY_USERNAME', ''),
            'password' => env('LIMESURVEY_PASSWORD', ''),
        ],
    ],
];
