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
        'title' => 'Új követő',
        'text' => ':user követ téged!',
    ],
    'comment' => [
        'new' => [
            'title' => 'Hozzászólás ehhez: :model',
            'text' => ':user hozzászólt a :model -led hez.',
        ],
        'reply' => [
            'title' => 'Új válasz ennél: :model',
            'text' => ':user válaszolt a hozzászólásodra ezen: :model',
        ],
        'mention' => [
            'title' => 'New mention',
            'text' => ':user mentioned you in a comment!',
        ],
        'like' => [
            'title' => 'Hozzászólás kedvelve',
            'text' => ':user: kedveli a hozzászólásod!',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Kedvelést szereztél',
            'text' => ':user kedvelte a bejegyzésedet!',
        ],
        'mention' => [
            'title' => 'Új említés',
            'text' => ':user megemlített Téged!',
        ],
        'repost' => [
            'title' => 'Újraposztolás',
            'text' => ':user: újraposztolta a posztod!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Szintet léptél!',
            'text' => 'Gratulálunk a(z) :level:. szint eléréséhez!',
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
            'title' => 'Hozzánk került a bejelentésed! (Ügy :id)',
            'text' => 'A csapatunk dolgozik rajta, és azonnal vet egy pillantást a problémádra. Köszönjük hogy ilyen király és fantasztikus vagy hogy segítesz nekünk nyugisan tartani a dolgokat! ',
        ],
        'resolved' => [
            'title' => 'Megnéztük a jelentésedet (Ügy :id)',
            'text' => 'Üdv, a bejelentett problémáról már gondoskodtunk, és szortíroztuk. Köszönjük hogy a szuperhőse vagy a közösségünknek!',
        ],
        'dismissed' => [
            'title' => 'Az ügyed frissítve lett (Ügy :id)',
            'text' => 'Egy kis kutatómunka után megtaláltuk hogy a probléma amit bejelentettél nem megy szembe a szabályainkkal. Ha szeretnéd hogy valami specifikusba nézzünk bele, kérlek bizonyosodj meg róla hogy a skin-t, profilt, stb. amikor bejelented, írj mellé részletesebb információt ha kell. Köszönjük hogy érdekel hogy mi történik a közösségünkben!',
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
