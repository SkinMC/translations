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
        'title' => 'Yeni takipçi',
        'text' => ':kullanıcı seni takip ediyor!'
    ],
    'comment' => [
        'new' => [
            'title' => ':model yorumu',
            'text' => ':kullanıcı senin :model \'ine yorum yaptı'
        ],
        'reply' => [
            'title' => ':model yorumuna cevap ver',
            'text' => ':kullanıcı :model yorumuna cevap verdi'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'Beğeni alındı',
            'text' => ':kullanıcı gönderini beğendi!',
        ],
        'mention' => [
            'title' => 'Yeni bahsetme',
            'text' => ':kullanıcı gönderisinde senden bahsetti!'
        ]
    ],
    'level' => [
        'up' => [
            'title' => 'Seviye atladın!',
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
