<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Dashboard Lines
    |--------------------------------------------------------------------------
    |
    |
    */
    'dashboard' => [
        'title' => 'Pannello di controllo',
        'total-members' => 'Membri totali',
        'claimed-profiles' => 'Profili reclamati',
        'profiles' => 'Profili',
        'skins' => 'Skin',
        'users' => 'Utenti',
        'last-30-days' => 'Ultimi 30 giorni',
        'members' => 'Membri',
        'usernames' => 'Nomi utente',
    ],
    'help' => [
        'title' => 'Aiuto',
        'subtitle' => 'Consigli utili per il pannello di controllo SkinMC',
    ],
    'users' => [
        'title' => 'Utenti',
        'subtitle' => ':count utenti totali registrati',
        'list' => [
            'username' => 'Nome utente',
            'email' => 'E-mail',
            'status' => 'Stato',
            'role' => 'Ruolo'
        ],
    ],
    'skins' => [
        'title' => 'Skin',
    ],
    'tags' => [
        'title' => 'Tag',
        'pending' => 'Tag in sospeso',
        'banned' => 'Tag vietati',
    ],
    'reports' => [
        'title' => 'Segnalazioni',
    ],
    'feed' => [
        'title' => 'Elenco feed',
        'subtitle' => ':count post totali creati',
    ],
    'wallpapers' => [
        'title' => 'Sfondi',
        'challenge' => [
            'title' => 'Sfida dello sfondo',
            'description' => 'Seleziona il vincitore per :challenge_month. Lo sfondo selezionato sarà visualizzato nella homepage in :display_month.',
            'back_to_moderation' => 'Torna alla moderazione',
            'month_label' => 'Mese della sfida',
            'previous_month' => 'Mese precedente',
            'next_month' => 'Mese successivo',
            'shortlisted' => ':count scelta rapida',
            'winner_selected' => 'Vincitore selezionato',
            'no_winner_selected' => 'Nessun vincitore selezionato',
            'selected_winner' => 'Vincitore scelto',
            'displays_on_home' => 'Mostra in home di :month',
            'open_wallpaper' => 'Apri sfondo',
            'clear_reason_placeholder' => 'Motivo della cancellazione (facoltativo)',
            'clear_confirm' => 'Cancella vincitore per :month?',
            'clear_winner' => 'Cancella vincitore',
            'winner_unavailable' => 'Lo sfondo selezionato non è disponibile.',
            'display_month' => 'Mostra mese: :month',
            'choose_from_shortlist' => 'Scegli uno sfondo dalla lista qui sotto.',
            'recent_changes' => 'Modifiche recenti',
            'action_replaced' => 'Vincitore sostituito',
            'action_set' => 'Impostato il vincitore',
            'action_cleared' => 'Vincitore cancellato',
            'log_actor' => 'per :name',
            'log_none' => 'Nessuno',
            'log_empty' => 'Nessun cambio vincitore registrato per questo mese.',
            'table_rank' => '#',
            'table_wallpaper' => 'Sfondo',
            'table_creator' => 'Autore',
            'table_stats' => 'Statistiche',
            'table_action' => 'Azione',
            'stats_views' => ':count visualizzazioni',
            'stats_downloads' => ':count download',
            'stats_favourites' => ':count preferiti',
            'reason_placeholder' => 'Motivo (opzionale)',
            'set_winner' => 'Imposta vincitore',
            'selected' => 'Selezionato',
            'no_entries' => 'Nessuna sfida idonea per :month.',
            'unknown_creator' => 'Creatore sconosciuto',
            'unknown_user' => 'Sconosciuto',
            'system_user' => 'Sistema',
            'flash_saved' => 'Vincitore della sfida salvato.',
            'flash_cleared' => 'Vincitore della sfida cancellato.',
            'flash_none_to_clear' => 'Nessun vincitore è stato impostato per questo mese.',
        ],
    ],
    'comments' => [
        'title' => 'Commenti',
        'subtitle' => ':count commenti totali postati',
        'deleted' => [
            'title' => 'Commenti eliminati',
            'subtitle' => ':count commenti totali eliminati',
        ]
    ]
];
