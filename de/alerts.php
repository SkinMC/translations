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
        'title' => 'Neuer Follower',
        'text' => ':user folgt dir jetzt!'
    ],
    'comment' => [
        'new' => [
            'title' => ':model Kommentar',
            'text' => ':user hat dein :model kommentiert'
        ],
        'reply' => [
            'title' => 'Antwort auf :model Kommentar',
            'text' => ':user antwortete auf einen :model Kommentar'
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'Like erhalten',
            'text' => ':user gefällt dein Beitrag!',
        ],
        'mention' => [
            'title' => 'Neue Erwähnung',
            'text' => ':user hat dich in seinem Beitrag erwähnt!'
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => ':user reposted your post!'
        ]
    ],
    'level' => [
        'up' => [
            'title' => 'Du hast das nächste Level erreicht!',
            'text' => 'Herzlichen Glückwunsch beim Erreichen des Levels :level!'
        ]
    ],
    'report' => [
        'created' => [
            'title' => 'Wir haben deinen Bericht erhalten (Case :id)',
            'text' => 'Unser Team wird sich sofort darum kümmern. Danke, dass du uns hilfst, alles im Griff zu behalten! '
        ],
        'resolved' => [
            'title' => 'Wir haben deine Meldung überprüft (Case :id)',
            'text' => 'Hallo, das gemeldete Anliegen wurde bearbeitet und ist nun geklärt. Danke, dass du ein wichtiger Teil unserer Community bist!',
        ],
        'dismissed' => [
            'title' => 'Ein Update zu deinem Bericht (Case :id)',
            'text' => 'Nach einigen Nachforschungen haben wir festgestellt, dass der von dir gemeldete Inhalt nicht gegen unsere Richtlinien verstößt. Wenn du möchtest, dass wir etwas Bestimmtes überprüfen, stelle bitte sicher, dass du den Skin, das Profil usw. meldest, sowie zusätzliche Informationen zur Verfügung stellst, sofern erforderlich. Danke für dein Vertrauen und Engagement in unserer Community!',
        ]
    ]
];
