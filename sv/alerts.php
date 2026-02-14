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
        'text' => ':user har börjat följa dig!',
    ],
    'comment' => [
        'new' => [
            'title' => ':model kommentar',
            'text' => ':user kommenterade på din :model',
        ],
        'reply' => [
            'title' => 'Svara på :model kommentar',
            'text' => ':user svarade på en :model kommentar',
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
            'title' => 'Du fick en gillning',
            'text' => ':user gillade ditt inlägg!',
        ],
        'mention' => [
            'title' => 'Ny omnämning',
            'text' => ':user nämnde dig i deras inlägg!',
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => ':user reposted your post!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Du levlade upp!',
            'text' => 'Grattis, du har nått level :level!',
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
            'title' => 'Vi har fått din anmälan! (Id: :id)',
            'text' => 'Vårat team är på det och kommer kolla på det på direkten. Tack för att du är fantastisk och hjälper oss att hålla det lugnt!',
        ],
        'resolved' => [
            'title' => 'Vi har granskat din anmälan (Id: :id)',
            'text' => 'Hej, anmälan har tagits hand om och är nu sorterad. Tack för att du är en superhjälte i våran community!',
        ],
        'dismissed' => [
            'title' => 'Uppdatering till din rapport (Id: :id)',
            'text' => 'Efter lite detektivarbete har vi upptäckt att innehållet som du anmälde inte går mot våra riktlinjer. Om du vill att vi ska granska något specifikt kan du anmäla utseendet, profilen etc och ger oss ytterligare kontext när det behövs. Tack för din involvering och oro i våran community!',
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
];
