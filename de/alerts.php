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
        'text' => ':user folgt dir jetzt!',
    ],
    'comment' => [
        'new' => [
            'title' => ':model Kommentar',
            'text' => ':user hat dein :model kommentiert',
        ],
        'reply' => [
            'title' => 'Antwort auf :model Kommentar',
            'text' => ':user antwortete auf einen :model Kommentar',
        ],
        'like' => [
            'title' => 'Kommentar wurde geliked',
            'text' => ':user gefällt dein Kommentar!',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Like erhalten',
            'text' => ':user gefällt dein Beitrag!',
        ],
        'mention' => [
            'title' => 'Neue Erwähnung',
            'text' => ':user hat dich in seinem Beitrag erwähnt!',
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => ':user hat deinen Post repostet!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Du hast das nächste Level erreicht!',
            'text' => 'Herzlichen Glückwunsch beim Erreichen des Levels :level!',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'Zum Board hinzugefügt',
            'text' => ':user wurde zum Mitgestalten des Boards „:board“ hinzugefügt.',
        ],
    ],
    'report' => [
        'created' => [
            'title' => 'Wir haben deinen Bericht erhalten (Case :id)',
            'text' => 'Unser Team wird sich sofort darum kümmern. Danke, dass du uns hilfst, alles im Griff zu behalten! ',
        ],
        'resolved' => [
            'title' => 'Wir haben deine Meldung überprüft (Case :id)',
            'text' => 'Hallo, das gemeldete Anliegen wurde bearbeitet und ist nun geklärt. Danke, dass du ein wichtiger Teil unserer Community bist!',
        ],
        'dismissed' => [
            'title' => 'Ein Update zu deinem Bericht (Case :id)',
            'text' => 'Nach einigen Nachforschungen haben wir festgestellt, dass der von dir gemeldete Inhalt nicht gegen unsere Richtlinien verstößt. Wenn du möchtest, dass wir etwas Bestimmtes überprüfen, stelle bitte sicher, dass du den Skin, das Profil usw. meldest, sowie zusätzliche Informationen zur Verfügung stellst, sofern erforderlich. Danke für dein Vertrauen und Engagement in unserer Community!',
        ],
    ],
    'server' => [
        'review_received' => [
            'title' => 'Neue Bewertung für :server',
            'text' => 'Für „:server“ wurde eine neue Bewertung abgegeben (:rating/5).',
        ],
        'low_rating' => [
            'title' => 'Bewertung für :server gesunken',
            'text' => 'Deine durchschnittliche Bewertung liegt nun bei :rating/5 aus :reviews Bewertungen. Wirf einen Blick in die Insights für mehr Details.',
        ],
        'vote_milestone' => [
            'title' => 'Voting-Meilenstein erreicht',
            'text' => ':server hat in den letzten 30 Tagen :votes Stimmen erreicht.',
        ],
        'approved' => [
            'title' => ':server ist jetzt freigegeben',
            'text' => 'Dein Eintrag hat die Prüfung bestanden und kann live gehen, sobald alle Anforderungen erfüllt sind.',
        ],
        'unapproved' => [
            'title' => ':server benötigt Updates',
            'text' => 'Der Status deines Eintrags wurde angepasst. Sieh dir die Details an und nimm bei Bedarf Aktualisierungen vor.',
        ],
        'published' => [
            'title' => ':server ist nun live geschaltet',
            'text' => 'Dein Eintrag ist veröffentlicht und in der Serverliste sichtbar.',
        ],
        'unpublished' => [
            'title' => ':server ist derzeit nicht veröffentlicht',
            'text' => 'Dein Eintrag ist öffentlich nicht mehr sichtbar. Überprüfe den Status in deinem Dashboard.',
        ],
        'verified' => [
            'title' => ':server ist nun verifiziert',
            'text' => 'Dein Eintrag wurde mit einem Verifizierungs-Badge ausgezeichnet.',
        ],
        'photo_requirement_complete' => [
            'title' => 'Die erforderlichen Fotos für :server wurden erfolgreich ergänzt',
            'published_text' => 'Du hast nun mindestens 5 Bilder hinzugefügt und dein Eintrag ist wieder live.',
            'pending_text' => 'Du hast nun mindestens 5 Bilder hinzugefügt und dein Eintrag ist wieder live.',
        ],
        'photo_requirement_missing' => [
            'title' => 'Ergänze weitere Fotos für :server',
            'text' => 'Dein Eintrag benötigt noch :remaining Foto(s), um das Minimum von :minimum zu erreichen und veröffentlicht zu bleiben.',
        ],
        'reminder_no_images' => [
            'title' => 'Für deinen Server-Eintrag wurden bisher keine Fotos hinzugefügt',
            'text' => 'Mit mindestens 5 Fotos wirkst du vertrauensvoller und bringst deinen Eintrag einen Schritt näher zur Veröffentlichung.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Dein Eintrag befindet sich weiterhin in Prüfung',
            'text' => 'Dein Eintrag wird schon eine Weile geprüft. Ein kurzer Check von Details und Fotos kann helfen, den Prozess reibungslos zu halten.',
        ],
    ],
];
