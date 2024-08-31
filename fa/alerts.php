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
        'title' => 'دنبال کننده جدید',
        'text' => ':user دارد شما را دنبال می کند!'
    ],
    'comment' => [
        'new' => [
            'title' => 'نظر مدل',
            'text' => ':user یک نظر روی مدلتان درست کرد'
        ],
        'reply' => [
            'title' => 'پاسخ به نظر مدل',
            'text' => 'کاربر به نظر مدل پاسخ داد'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'لایک دریافت کردید',
            'text' => ':user پست شما را پسندید!',
        ],
        'mention' => [
            'title' => 'اشاره جدید',
            'text' => ':user به شما در پستشان اشاره کرد!'
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
