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
        'mention' => [
            'title' => 'New mention',
            'text' => ':user mentioned you in a comment!',
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
            'title' => 'Aggiunto ad una bacheca',
            'text' => ':user ti ha aggiunto come collaboratore alla bacheca ":board".',
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
            'title' => ':server necessita di aggiornamenti',
            'text' => 'Il tuo annuncio è stato spostato fuori dallo stato approvato. Controlla i dettagli dell\'annuncio e aggiorna se necessario.',
        ],
        'published' => [
            'title' => ':server ora è attivo',
            'text' => 'Il tuo annuncio è pubblicato e visibile nell\'elenco dei server.',
        ],
        'unpublished' => [
            'title' => ':server non è piu pubblicato',
            'text' => 'La tua inserzione non è più visibile pubblicamente. Controlla lo stato dell\'inserzione nella tua dashboard.',
        ],
        'verified' => [
            'title' => ':server è ora verificato',
            'text' => 'Il tuo annuncio ha ricevuto un badge di verifica.',
        ],
        'photo_requirement_complete' => [
            'title' => 'Requisito foto completato per :server',
            'published_text' => 'Ora hai almeno 5 immagini e la tua inserzione è di nuovo attiva.',
            'pending_text' => 'Ora hai almeno 5 immagini. La tua inserzione è pronta per la moderazione.',
        ],
        'photo_requirement_missing' => [
            'title' => 'Aggiungi altre foto a :server',
            'text' => 'La tua inserzione ha bisogno :remaining più foto per raggiungere il minimo di :minimum e rimanere attiva.',
        ],
        'reminder_no_images' => [
            'title' => 'Il tuo elenco server non ha ancora foto',
            'text' => 'Aggiungi almeno 5 foto per migliorare la fiducia e avanzare la tua inserzione verso la pubblicazione.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'La tue inserzione è ancora in attesa di revisione',
            'text' => 'La tua inserzione è in sospeso da un po\'. I dettagli e le foto del doppio controllo aiutano a mantenere la revisione scorrevole.',
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
