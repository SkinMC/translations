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
        'title' => 'Panel',
        'total-members' => 'Miembros totales',
        'claimed-profiles' => 'Perfiles reclamados',
        'profiles' => 'Perfiles',
        'skins' => 'Skins',
        'users' => 'Usuarios',
        'last-30-days' => 'Últimos 30 días',
        'members' => 'Miembros',
        'usernames' => 'Nombres de usuario',
    ],
    'help' => [
        'title' => 'Ayuda',
        'subtitle' => 'Consejos útiles para el panel de control de SkinMC',
    ],
    'users' => [
        'title' => 'Usuarios',
        'subtitle' => ':count usuarios totales registrados',
        'list' => [
            'username' => 'Nombre de usuario',
            'email' => 'Correo electrónico',
            'status' => 'Estado',
            'role' => 'Rol'
        ],
    ],
    'skins' => [
        'title' => 'Skins',
    ],
    'tags' => [
        'title' => 'Etiquetas',
        'pending' => 'Etiquetas pendientes',
        'banned' => 'Etiquetas prohibidas',
    ],
    'reports' => [
        'title' => 'Reportes',
    ],
    'feed' => [
        'title' => 'Publicaciones',
        'subtitle' => ':count total de publicaciones creadas',
    ],
    'wallpapers' => [
        'title' => 'Fondos de Pantalla',
        'challenge' => [
            'title' => 'Wallpaper challenge',
            'description' => 'Select the winner for :challenge_month. The selected wallpaper will be featured on the homepage in :display_month.',
            'back_to_moderation' => 'Back to moderation',
            'month_label' => 'Challenge month',
            'previous_month' => 'Previous month',
            'next_month' => 'Next month',
            'shortlisted' => ':count shortlisted',
            'winner_selected' => 'Winner selected',
            'no_winner_selected' => 'No winner selected',
            'selected_winner' => 'Selected winner',
            'displays_on_home' => 'Displays on home in :month',
            'open_wallpaper' => 'Open wallpaper',
            'clear_reason_placeholder' => 'Reason for clearing (optional)',
            'clear_confirm' => 'Clear winner for :month?',
            'clear_winner' => 'Clear winner',
            'winner_unavailable' => 'The selected wallpaper is unavailable.',
            'display_month' => 'Display month: :month',
            'choose_from_shortlist' => 'Choose a wallpaper from the shortlist below.',
            'recent_changes' => 'Recent changes',
            'action_replaced' => 'Replaced winner',
            'action_set' => 'Set winner',
            'action_cleared' => 'Cleared winner',
            'log_actor' => 'by :name',
            'log_none' => 'None',
            'log_empty' => 'No winner changes logged for this month.',
            'table_rank' => '#',
            'table_wallpaper' => 'Wallpaper',
            'table_creator' => 'Creator',
            'table_stats' => 'Stats',
            'table_action' => 'Action',
            'stats_views' => ':count views',
            'stats_downloads' => ':count downloads',
            'stats_favourites' => ':count favourites',
            'reason_placeholder' => 'Reason (optional)',
            'set_winner' => 'Set winner',
            'selected' => 'Selected',
            'no_entries' => 'No eligible challenge entries for :month.',
            'unknown_creator' => 'Unknown creator',
            'unknown_user' => 'Unknown',
            'system_user' => 'System',
            'flash_saved' => 'Challenge winner saved.',
            'flash_cleared' => 'Challenge winner cleared.',
            'flash_none_to_clear' => 'No winner was set for this month.',
        ],
    ],
    'comments' => [
        'title' => 'Comentarios',
        'subtitle' => ':count comentarios publicados',
        'deleted' => [
            'title' => 'Comentarios eliminados',
            'subtitle' => ':count comentarios totales eliminados',
        ]
    ]
];
