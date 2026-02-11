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
        'title' => 'Nuovo follower',
        'text' => ':user ti segue!',
    ],
    'comment' => [
        'new' => [
            'title' => ':model commento',
            'text' => ':user ha fatto un commento sul tuo :model',
        ],
        'reply' => [
            'title' => 'Rispondi al commento di :model',
            'text' => ':user ha risposto a un commento su :model',
        ],
        'like' => [
            'title' => 'Hai messo like al commento',
            'text' => ':user ha messo like al tuo commento!',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Mi piace ricevuto',
            'text' => 'A :user è piaciuto il tuo messaggio!',
        ],
        'mention' => [
            'title' => 'Nuova menzione',
            'text' => ':user ti ha menzionato nel loro post!',
        ],
        'repost' => [
            'title' => 'Ripubblica',
            'text' => ':user ha ripubblicato il tuo post!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Sei salito di livello!',
            'text' => 'Congratulazioni per aver raggiunto il livello :level!',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'Aggiunto a una scheda',
            'text' => ':user ti ha aggiunto come collaboratore alla scheda ":board".',
        ],
    ],
    'report' => [
        'created' => [
            'title' => 'Abbiamo ricevuto il tuo report! (Caso :id)',
            'text' => 'La nostra squadra è sempre allerta e agirà il prima possibile. Grazie per la tua disponibilità nell\'aiutarci a mantenere un ambiente tranquillo! ',
        ],
        'resolved' => [
            'title' => 'Abbiamo esaminato il tuo report (Caso :id)',
            'text' => 'Ehilà, il problema segnalato è stato ricevuto ed è ora registrato. Grazie per essere un supereroe della nostra comunità!',
        ],
        'dismissed' => [
            'title' => 'Abbiamo esaminato il tuo rapporto (Caso :id)',
            'text' => 'Dopo qualche indagine, abbiamo scoperto che il contenuto che hai segnalato non va contro le nostre linee guida. Se vuoi farci visionare qualcosa di specifico, assicurati di segnalare la skin, il profilo, ecc, e di fornire un contesto aggiuntivo quando necessario. Grazie per la tua sollecitazione e il tuo aiuto alla nostra comunità!',
        ],
    ],
    'server' => [
        'review_received' => [
            'title' => 'Nuova recensione su :server',
            'text' => 'Il tuo annuncio ":server" ha ricevuto una nuova recensione (:rating/5).',
        ],
        'low_rating' => [
            'title' => 'Punteggio annullato per :server',
            'text' => 'Il tuo giudizio medio è ora :rating/5 attraverso :recensioni commenti. Considera di rivedere i feedback in Insights.',
        ],
        'vote_milestone' => [
            'title' => 'Traguardo voti raggiunto',
            'text' => ':server ha raggiunto :votes negli ultimi 30 giorni.',
        ],
        'approved' => [
            'title' => ':server è stato approvato',
            'text' => 'La tua richiesta ha superato la revisione ed è ora idoneo ad andare in diretta una volta che tutti i requisiti sono soddisfatti.',
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
