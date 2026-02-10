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
            'title' => 'New review on :server',
            'text' => 'Your listing ":server" received a new review (:rating/5).',
        ],
        'low_rating' => [
            'title' => 'Rating dropped for :server',
            'text' => 'Your average rating is now :rating/5 across :reviews reviews. Consider reviewing feedback in Insights.',
        ],
        'vote_milestone' => [
            'title' => 'Vote milestone reached',
            'text' => ':server reached :votes votes in the last 30 days.',
        ],
        'approved' => [
            'title' => ':server was approved',
            'text' => 'Your listing passed review and is now eligible to go live once all requirements are met.',
        ],
        'unapproved' => [
            'title' => ':server needs updates',
            'text' => 'Your listing was moved out of approved status. Review your listing details and update as needed.',
        ],
        'published' => [
            'title' => ':server is now live',
            'text' => 'Your listing is published and visible on the server list.',
        ],
        'unpublished' => [
            'title' => ':server was unpublished',
            'text' => 'Your listing is no longer visible publicly. Review listing status in your dashboard.',
        ],
        'photo_requirement_complete' => [
            'title' => 'Photo requirement complete for :server',
            'published_text' => 'You now have at least 5 images and your listing is live again.',
            'pending_text' => 'You now have at least 5 images. Your listing is ready for moderation.',
        ],
        'photo_requirement_missing' => [
            'title' => 'Add more photos to :server',
            'text' => 'Your listing needs :remaining more photo(s) to reach the minimum of :minimum and stay publishable.',
        ],
        'reminder_no_images' => [
            'title' => 'Your server listing still has no photos',
            'text' => 'Add at least 5 photos to improve trust and move your listing toward publication.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Your listing is still pending review',
            'text' => 'Your listing has been pending for a while. Double-check details and photos to help keep review smooth.',
        ],
    ],
];
