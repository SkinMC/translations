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
        'title' => 'Uusi seuraaja',
        'text' => ':user seuraa nyt sinua!',
    ],
    'comment' => [
        'new' => [
            'title' => ':model kommentti',
            'text' => ':user teki kommentin sinun :model',
        ],
        'reply' => [
            'title' => 'Vastaa :model kommentilla',
            'text' => ':user vastasi :model kommenttiin',
        ],
        'like' => [
            'title' => 'Tykätty kommentti',
            'text' => ':user tykkäsi kommentistasi!',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Tykkäys vastaanotettu',
            'text' => ':user tykkäsi julkaisustasi!',
        ],
        'mention' => [
            'title' => 'Uusi maininta',
            'text' => ':user mainitsi sinut heidän julkaisussaan!',
        ],
        'repost' => [
            'title' => 'Uudelleenjulkaise',
            'text' => ':user uudelleenjulkaisi julkaisusi!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Olet noussut seuraavalle tasolle!',
            'text' => 'Onnittelut tason :level saavuttamisesta!',
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
            'title' => 'Olemme vastaanottaneet raporttisi! (Tapaus :id)',
            'text' => 'Tiimimme tutkii asiaa välittömästi. Kiitos, että olet mahtava ja autat meitä pitämään asiat rauhallisina! ',
        ],
        'resolved' => [
            'title' => 'Olemme tarkastaneet raporttisi! (Tapaus :id)',
            'text' => 'Hei siellä, raportoitu asia on hoidettu ja on nyt selvitetty. Kiitos, että olet yhteisömme supersankari!',
        ],
        'dismissed' => [
            'title' => 'Pävitys raporttiisi! (Tapaus :id)',
            'text' => 'Tutkimustyön jälkeen olemme havainneet, että ilmoittamasi sisältö ei ole ohjeidemme vastaista. Jos haluat, että tarkistamme jotain tiettyä asiaa, varmista, että ilmoitat skinin, profiilin jne. ja annat tarvittaessa lisätietoja. Kiitos huolenpidostasi ja osallistumisestasi yhteisöömme!',
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
