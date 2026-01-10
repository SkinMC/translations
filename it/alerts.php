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
        'text' => ':user ti segue!'
    ],
    'comment' => [
        'new' => [
            'title' => ':model commento',
            'text' => ':user ha fatto un commento sul tuo :model'
        ],
        'reply' => [
            'title' => 'Rispondi al commento di :model',
            'text' => ':user ha risposto a un commento su :model'
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'Mi piace ricevuto',
            'text' => 'A :user è piaciuto il tuo messaggio!',
        ],
        'mention' => [
            'title' => 'Nuova menzione',
            'text' => ':user ti ha menzionato nel loro post!'
        ]
    ],
    'level' => [
        'up' => [
            'title' => 'Sei salito di livello!',
            'text' => 'Congratulazioni per aver raggiunto il livello :level!'
        ]
    ],
    'report' => [
        'created' => [
            'title' => 'Abbiamo ricevuto il tuo report! (Caso :id)',
            'text' => 'La nostra squadra è sempre allerta e agirà il prima possibile. Grazie per la tua disponibilità nell\'aiutarci a mantenere un ambiente tranquillo! '
        ],
        'resolved' => [
            'title' => 'Abbiamo esaminato il tuo report (Caso :id)',
            'text' => 'Ehilà, il problema segnalato è stato ricevuto ed è ora registrato. Grazie per essere un supereroe della nostra comunità!',
        ],
        'dismissed' => [
            'title' => 'Abbiamo esaminato il tuo rapporto (Caso :id)',
            'text' => 'Dopo qualche indagine, abbiamo scoperto che il contenuto che hai segnalato non va contro le nostre linee guida. Se vuoi farci visionare qualcosa di specifico, assicurati di segnalare la skin, il profilo, ecc, e di fornire un contesto aggiuntivo quando necessario. Grazie per la tua sollecitazione e il tuo aiuto alla nostra comunità!',
        ]
    ]
];
