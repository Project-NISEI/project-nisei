<?php

return [
    'feeds' => [
        'main' => [
            'items' => 'App\Blog@getFeedItems',
            'url' => '/feed',
            'title' => 'All NISEI articles',
            'view' => 'feed::feed',
        ],
    ],
];
