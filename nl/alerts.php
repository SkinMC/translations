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
        'title' => 'Nieuwe volger',
        'text' => ':user volgt je nu!'
    ],
    'comment' => [
        'new' => [
            'title' => ':model commentaar',
            'text' => ':user heeft een opmerking geplaatst op je :model'
        ],
        'reply' => [
            'title' => 'Reageer op :model reactie',
            'text' => ':user antwoordde op een :model reactie'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'Like ontvangen',
            'text' => ':user heeft je post geliked!',
        ],
        'mention' => [
            'title' => 'Nieuwe vermelding',
            'text' => ':user noemde je in zijn bericht!'
        ]
    ],
    'level' => [
        'up' => [
            'title' => 'Je bent een level omhoog gegaan!',
            'text' => 'Gefeliciteerd met het bereiken van level :level!'
        ]
    ],
    'report' => [
        'created' => [
            'title' => 'We hebben uw rapport ontvangen! (Zaak :id)',
            'text' => 'Ons team is er mee bezig en zal er direct naar kijken. Bedankt voor het geweldig zijn en ons helpen om de dingen achter te houden! '
        ],
        'resolved' => [
            'title' => 'We hebben uw rapport beoordeeld (Zaak :id)',
            'text' => 'Hallo daar, het gerapporteerde probleem is geregeld en is nu opgelost. Bedankt om een superheld van onze gemeenschap te zijn!',
        ],
        'dismissed' => [
            'title' => 'Update van uw gerapporteerde probleem (Zaak :id)',
            'text' => 'Na wat detectief werk hebben we ontdekt dat de inhoud die je had gerapporteerd niet in strijd is met onze richtlijnen. Als u wilt dat we iets specifieks bekijken, zorg er dan voor dat u de skin, profiel, etc. rapporteert en aanvullende context geeft wanneer dat nodig is. Bedankt voor uw zorgen en betrokkenheid bij onze gemeenschap!',
        ]
    ]
];
