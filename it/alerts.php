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
        'text' => ':user is now following you.',
    ],
    'comment' => [
        'new' => [
            'title' => ':model commento',
            'text' => ':user commented on your :model.',
        ],
        'reply' => [
            'title' => 'Reply to a :model comment',
            'text' => ':user replied to a :model comment.',
        ],
        'mention' => [
            'title' => 'Nuova menzione',
            'text' => ':user mentioned you in a comment.',
        ],
        'like' => [
            'title' => 'Hai messo like al commento',
            'text' => ':user liked your comment.',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Post liked',
            'text' => ':user liked your post.',
        ],
        'mention' => [
            'title' => 'Nuova menzione',
            'text' => ':user mentioned you in their post.',
        ],
        'repost' => [
            'title' => 'Ripubblica',
            'text' => ':user reposted your post.',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'Nuovo messaggio',
            'text' => ':user ti ha inviato un messaggio.',
        ],
        'group_invitation' => [
            'title' => 'Group chat invitation',
            'text' => ':user invited you to join the group chat ":group".',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'You levelled up!',
            'text' => 'Congratulazioni per aver raggiunto il livello :level!',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'Aggiunto ad una bacheca',
            'text' => ':user ti ha aggiunto come collaboratore alla bacheca ":board".',
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
            'text' => 'Your listing needs at least :minimum photos to be published. Photos still needed: :remaining.',
        ],
        'reminder_no_images' => [
            'title' => 'Il tuo elenco server non ha ancora foto',
            'text' => 'Add photos to complete your server listing.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'La tue inserzione è ancora in attesa di revisione',
            'text' => 'Your listing is awaiting moderation. Check that its details and photos are up to date.',
        ],
    ],
    'wallpaper' => [
        'challenge_winner' => [
            'title' => 'Vincitore della sfida dello sfondo',
            'text' => 'Il tuo sfondo ":title" è stato selezionato come vincitore per :month.',
        ],
    ],
    'streak' => [
        'at_risk' => [
            'title' => ':days-giorni di streak a rischio',
            'text_send_now' => 'Invia un messaggio prima di mezzanotte UTC per mantenere la tua serie viva.',
            'text_waiting_other' => 'Hai risposto oggi. Hai ancora bisogno di un\'altra risposta prima di mezzanotte UTC.',
        ],
    ],
];
