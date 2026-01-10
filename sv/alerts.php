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
        'title' => 'Ny följare',
        'text' => ':user har börjat följa dig!'
    ],
    'comment' => [
        'new' => [
            'title' => ':model kommentar',
            'text' => ':user kommenterade på din :model'
        ],
        'reply' => [
            'title' => 'Svara på :model kommentar',
            'text' => ':user svarade på en :model kommentar'
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'Du fick en gillning',
            'text' => ':user gillade ditt inlägg!',
        ],
        'mention' => [
            'title' => 'Ny omnämning',
            'text' => ':user nämnde dig i deras inlägg!'
        ]
    ],
    'level' => [
        'up' => [
            'title' => 'Du levlade upp!',
            'text' => 'Grattis, du har nått level :level!'
        ]
    ],
    'report' => [
        'created' => [
            'title' => 'Vi har fått din anmälan! (Id: :id)',
            'text' => 'Vårat team är på det och kommer kolla på det på direkten. Tack för att du är fantastisk och hjälper oss att hålla det lugnt!'
        ],
        'resolved' => [
            'title' => 'Vi har granskat din anmälan (Id: :id)',
            'text' => 'Hej, anmälan har tagits hand om och är nu sorterad. Tack för att du är en superhjälte i våran community!',
        ],
        'dismissed' => [
            'title' => 'Uppdatering till din rapport (Id: :id)',
            'text' => 'Efter lite detektivarbete har vi upptäckt att innehållet som du anmälde inte går mot våra riktlinjer. Om du vill att vi ska granska något specifikt kan du anmäla utseendet, profilen etc och ger oss ytterligare kontext när det behövs. Tack för din involvering och oro i våran community!',
        ]
    ]
];
