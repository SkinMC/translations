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
        'title' => 'Nowy obserwujący',
        'text' => ':user zaczął Cię obserwować!',
    ],
    'comment' => [
        'new' => [
            'title' => ':model komentarz',
            'text' => ':user dodał komenatrz do :model',
        ],
        'reply' => [
            'title' => 'Odpowiedz na komentarz do :model',
            'text' => ':user odpowiedział na komentarz :model',
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Otrzymano polubienie',
            'text' => ':user polubił Twój post!',
        ],
        'mention' => [
            'title' => 'Nowa wzmianka',
            'text' => ':user wspomiał o Tobie w swoim poście!',
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => ':user reposted your post!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Nowy poziom!',
            'text' => 'Gratulacje osiągnięcia poziomu :level!',
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
            'title' => 'Otrzymaliśmy Twoje zgłoszenie! (Sprawa :id)',
            'text' => 'Nasz zespół zajmie się tym niezwłocznie. Dziękujemy za bycie niesamowitym i pomoc w utrzymaniu dobrej atmosfery! ',
        ],
        'resolved' => [
            'title' => 'Sprawdziliśmy Twoje zgłoszenie! (Sprawa :id)',
            'text' => 'Cześć, zgłoszony problem został przyjęty i jest teraz w trakcie. Dziękujemy za bycie superbohaterem naszej społeczności!',
        ],
        'dismissed' => [
            'title' => 'Aktualizacja twojego zgłoszenia (Sprawa :id)',
            'text' => 'Po przeanalizowaniu zgłoszenia, treść którą zgłosiłeś, nie jest sprzeczna z naszymi wytycznymi. Jeśli chcesz, abyśmy przejrzeli coś konkretnego, upewnij się, że zgłosisz skórkę, profil itp., i podaj dodatkowy kontekst w razie potrzeby. Dziękujemy za troskę i zaangażowanie w naszą społeczność!',
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
