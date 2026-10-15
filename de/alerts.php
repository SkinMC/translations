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
        'text' => ':user is now following you.',
    ],
    'comment' => [
        'new' => [
            'title' => ':model Kommentar',
            'text' => ':user commented on your :model.',
        ],
        'reply' => [
            'title' => 'Reply to a :model comment',
            'text' => ':user replied to a :model comment.',
        ],
        'mention' => [
            'title' => 'Neue Erwähnung',
            'text' => ':user mentioned you in a comment.',
        ],
        'like' => [
            'title' => 'Kommentar wurde geliked',
            'text' => ':user liked your comment.',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Post liked',
            'text' => ':user liked your post.',
        ],
        'mention' => [
            'title' => 'Neue Erwähnung',
            'text' => ':user mentioned you in their post.',
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => ':user reposted your post.',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'New message',
            'text' => ':user sent you a message.',
        ],
        'group_invitation' => [
            'title' => 'Group chat invitation',
            'text' => ':user invited you to join the group chat ":group".',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'You levelled up!',
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
            'title' => 'Skin project invitation',
            'text' => ':user invited you to edit ":project". Open the invitation to join.',
        ],
    ],
    'report' => [
        'created' => [
            'title' => 'Report received (case :id)',
            'text' => 'Your report has been sent to our moderation team for review.',
        ],
        'resolved' => [
            'title' => 'Report reviewed (case :id)',
            'text' => 'Our moderation team has completed its review and closed your report.',
        ],
        'dismissed' => [
            'title' => 'Report dismissed (case :id)',
            'text' => 'Our moderation team reviewed your report and took no action. If something was missed, report the specific content and include details to help us review it.',
        ],
    ],
    'system' => [
        'discord_invite' => [
            'title' => 'Join the SkinMC Discord',
            'text' => 'Meet other Minecraft players in the SkinMC Discord server.',
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
            'text' => 'Your listing needs at least :minimum photos to be published. Photos still needed: :remaining.',
        ],
        'reminder_no_images' => [
            'title' => 'Für deinen Server-Eintrag wurden bisher keine Fotos hinzugefügt',
            'text' => 'Add photos to complete your server listing.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Dein Eintrag befindet sich weiterhin in Prüfung',
            'text' => 'Your listing is awaiting moderation. Check that its details and photos are up to date.',
        ],
    ],
    'wallpaper' => [
        'challenge_winner' => [
            'title' => 'Wallpaper challenge winner',
            'text' => 'Your wallpaper ":title" was selected as the winner for :month.',
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
