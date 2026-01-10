<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Alerts (Notifications) Lines
    |--------------------------------------------------------------------------
    |
    |
    */
    'follower' => [
        'title' => 'Új követő',
        'text' => ':user követett Téged!'
    ],
    'comment' => [
        'new' => [
            'title' => 'Hozzászólás ehhez: :model',
            'text' => ':user hozzászólt ehhez: :model'
        ],
        'reply' => [
            'title' => 'Új válasz ennél: :model',
            'text' => ':user válaszolt a hozzászólásodra ezen: :model'
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'Új kedvelés',
            'text' => ':user kedvelte a bejegyzésedet!',
        ],
        'mention' => [
            'title' => 'Új említés',
            'text' => ':user megemlített Téged!'
        ]
    ],
    'level' => [
        'up' => [
            'title' => 'Szintet léptél!',
            'text' => 'Congratulations on reaching level :level!'
        ]
    ],
    'report' => [
        'created' => [
            'title' => 'We\'ve received your report! (Case :id)',
            'text' => 'Our team is on it and will look into it right away. Thanks for being awesome and helping us keep things chill! '
        ],
        'resolved' => [
            'title' => 'Megnéztük a jelentésedet (Ügy :id)',
            'text' => 'Hi there, the reported issue has been taken care of and is now sorted. Thanks for being a superhero of our community!',
        ],
        'dismissed' => [
            'title' => 'Az ügyed frissítve lett (Ügy :id)',
            'text' => 'After some detective work, we\'ve found that the content you had reported doesn\'t go against our guidelines. If you want us to review something specific, please make sure that you report the skin, profile, etc, and provide additional context when needed. Thanks for your concern and involvement in our community!',
        ]
    ]
];
