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
        'skins' => 'Aspectos',
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
        'title' => 'Fondos de pantalla',
        'challenge' => [
            'title' => 'Desafío de fondo de pantalla',
            'description' => 'Seleccione el ganador de :challenge_month. El fondo de pantalla seleccionado aparecerá en la página de inicio en :display_month.',
            'back_to_moderation' => 'Volver a la moderación',
            'month_label' => 'Mes de desafío',
            'previous_month' => 'Mes Anterior',
            'next_month' => 'Mes Próximo',
            'shortlisted' => ':count en lista',
            'winner_selected' => 'Ganador seleccionado',
            'no_winner_selected' => 'Ningún ganador seleccionado',
            'selected_winner' => 'Ganador seleccionado',
            'displays_on_home' => 'Mostrar en el inicio en :month',
            'open_wallpaper' => 'Abrir fondo de pantalla',
            'clear_reason_placeholder' => 'Motivo de la eliminación (opcional)',
            'clear_confirm' => '¿Eliminar al ganador de :month?',
            'clear_winner' => 'Eliminar ganador',
            'winner_unavailable' => 'El fondo de pantalla seleccionado no está disponible.',
            'display_month' => 'Mostrar month: :month',
            'choose_from_shortlist' => 'Elige un fondo de pantalla de la lista de abajo.',
            'recent_changes' => 'Cambios recientes',
            'action_replaced' => 'Reemplazar ganador',
            'action_set' => 'Establecer ganador',
            'action_cleared' => 'Eliminar ganador',
            'log_actor' => 'de :name',
            'log_none' => 'Ninguno',
            'log_empty' => 'No hay cambios registrados para el ganador de este mes.',
            'table_rank' => '#',
            'table_wallpaper' => 'Fondo de pantalla',
            'table_creator' => 'Creador',
            'table_stats' => 'Estadísticas',
            'table_action' => 'Acción',
            'stats_views' => ':count vistas',
            'stats_downloads' => ':count descargas',
            'stats_favourites' => ':count favoritos',
            'reason_placeholder' => 'Motivo (opcional)',
            'set_winner' => 'Establecer ganador',
            'selected' => 'Seleccionado',
            'no_entries' => 'No hay participaciones elegibles para :month.',
            'unknown_creator' => 'Creador desconocido',
            'unknown_user' => 'Desconocido',
            'system_user' => 'Sistema',
            'flash_saved' => 'Ganador del desafío guardado.',
            'flash_cleared' => 'Ganador del desafío eliminado.',
            'flash_none_to_clear' => 'No se estableció ningún ganador para este mes.',
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
