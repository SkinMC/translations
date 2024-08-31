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
        'title' => 'Novo seguidor',
        'text' => ':user agora está te seguindo!'
    ],
    'comment' => [
        'new' => [
            'title' => ':model comentário',
            'text' => ':user comentou no seu :model'
        ],
        'reply' => [
            'title' => 'Responder em :model comment',
            'text' => ':user respondeu a um comentário :model'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'Curtidas recebidas',
            'text' => ':user curtiu sua publicação!',
        ],
        'mention' => [
            'title' => 'Nova menção',
            'text' => ':user mencionou você em sua publicação!'
        ]
    ],
    'level' => [
        'up' => [
            'title' => 'You leveled up!',
            'text' => 'Congratulations on reaching level :level!'
        ]
    ],
    'report' => [
        'created' => [
            'title' => 'We\'ve received your report! (Case :id)',
            'text' => 'Our team is on it and will look into it right away. Thanks for being awesome and helping us keep things chill! '
        ],
        'resolved' => [
            'title' => 'We reviewed your report (Case :id)',
            'text' => 'Hi there, the reported issue has been taken care of and is now sorted. Thanks for being a superhero of our community!',
        ],
        'dismissed' => [
            'title' => 'Update to your report (Case :id)',
            'text' => 'After some detective work, we\'ve found that the content you had reported doesn\'t go against our guidelines. If you want us to review something specific, please make sure that you report the skin, profile, etc, and provide additional context when needed. Thanks for your concern and involvement in our community!',
        ]
    ]
];
