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
        'text' => ':user volgt je nu!',
    ],
    'comment' => [
        'new' => [
            'title' => ':model commentaar',
            'text' => ':user heeft een opmerking geplaatst op je :model',
        ],
        'reply' => [
            'title' => 'Reageer op :model reactie',
            'text' => ':user antwoordde op een :model reactie',
        ],
        'mention' => [
            'title' => 'New mention',
            'text' => ':user mentioned you in a comment!',
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Like ontvangen',
            'text' => ':user heeft je post geliked!',
        ],
        'mention' => [
            'title' => 'Nieuwe vermelding',
            'text' => ':user noemde je in zijn bericht!',
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => ':user reposted your post!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Je bent een level omhoog gegaan!',
            'text' => 'Gefeliciteerd met het bereiken van level :level!',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'Added to a board',
            'text' => ':user added you as a collaborator to the board ":board".',
        ],
    ],
    'report' => [
        'created' => [
            'title' => 'We hebben uw rapport ontvangen! (Zaak :id)',
            'text' => 'Ons team is er mee bezig en zal er direct naar kijken. Bedankt voor het geweldig zijn en ons helpen om de dingen achter te houden! ',
        ],
        'resolved' => [
            'title' => 'We hebben uw rapport beoordeeld (Zaak :id)',
            'text' => 'Hallo daar, het gerapporteerde probleem is geregeld en is nu opgelost. Bedankt om een superheld van onze gemeenschap te zijn!',
        ],
        'dismissed' => [
            'title' => 'Update van uw gerapporteerde probleem (Zaak :id)',
            'text' => 'Na wat detectief werk hebben we ontdekt dat de inhoud die je had gerapporteerd niet in strijd is met onze richtlijnen. Als u wilt dat we iets specifieks bekijken, zorg er dan voor dat u de skin, profiel, etc. rapporteert en aanvullende context geeft wanneer dat nodig is. Bedankt voor uw zorgen en betrokkenheid bij onze gemeenschap!',
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
        'verified' => [
            'title' => ':server is now verified',
            'text' => 'Your listing received a verification badge.',
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
    'streak' => [
        'at_risk' => [
            'title' => ':days-day streak at risk',
            'text_send_now' => 'Send a message before midnight UTC to keep your streak alive.',
            'text_waiting_other' => 'You replied today. You still need one reply back before midnight UTC.',
        ],
    ],
];
