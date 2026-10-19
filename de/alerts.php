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
        'text' => '',
    ],
    'comment' => [
        'new' => [
            'title' => ':model Kommentar',
            'text' => '',
        ],
        'reply' => [
            'title' => '',
            'text' => '',
        ],
        'mention' => [
            'title' => 'Neue Erwähnung',
            'text' => '',
        ],
        'like' => [
            'title' => 'Kommentar wurde geliked',
            'text' => '',
        ],
    ],
    'post' => [
        'like' => [
            'title' => '',
            'text' => '',
        ],
        'mention' => [
            'title' => 'Neue Erwähnung',
            'text' => '',
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => '',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => '',
            'text' => '',
        ],
        'group_invitation' => [
            'title' => '',
            'text' => '',
        ],
    ],
    'level' => [
        'up' => [
            'title' => '',
            'text' => 'Herzlichen Glückwunsch beim Erreichen des Levels :level!',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'Zum Board hinzugefügt',
            'text' => ':user wurde zum Mitgestalten des Boards „:board“ hinzugefügt.',
        ],
    ],
    'skin_editor' => [
        'project_invitation' => [
            'title' => '',
            'text' => '',
        ],
    ],
    'report' => [
        'created' => [
            'title' => '',
            'text' => '',
        ],
        'resolved' => [
            'title' => '',
            'text' => '',
        ],
        'dismissed' => [
            'title' => '',
            'text' => '',
        ],
    ],
    'system' => [
        'discord_invite' => [
            'title' => '',
            'text' => '',
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
            'text' => '',
        ],
        'reminder_no_images' => [
            'title' => 'Für deinen Server-Eintrag wurden bisher keine Fotos hinzugefügt',
            'text' => '',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Dein Eintrag befindet sich weiterhin in Prüfung',
            'text' => '',
        ],
    ],
    'wallpaper' => [
        'challenge_winner' => [
            'title' => '',
            'text' => '',
        ],
    ],
    'streak' => [
        'at_risk' => [
            'title' => ':days-Tage-Streak in Gefahr',
            'text_send_now' => 'Schicke vor Mitternacht (UTC) eine Nachricht, damit deine Streak weiterläuft.',
            'text_waiting_other' => 'Deine Antwort ist gesendet. Eine weitere Rückmeldung vor Mitternacht (UTC) hält deine Streak aktiv.',
        ],
    ],
];
