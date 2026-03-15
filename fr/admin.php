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
        'title' => 'Tableau de bord',
        'total-members' => 'Total des membres',
        'claimed-profiles' => 'Profils réclamés',
        'profiles' => 'Profils',
        'skins' => 'Skins',
        'users' => 'Utilisateur',
        'last-30-days' => '30 derniers jours',
        'members' => 'Membres',
        'usernames' => 'Pseudos',
    ],
    'help' => [
        'title' => 'Aide',
        'subtitle' => 'Astuces utiles pour le tableau de bord SkinMC',
    ],
    'users' => [
        'title' => 'Utilisateurs',
        'subtitle' => ':count nombre total d\'utilisateurs inscrits',
        'list' => [
            'username' => 'Pseudo',
            'email' => 'Email',
            'status' => 'Status',
            'role' => 'Rôle'
        ],
    ],
    'skins' => [
        'title' => 'Skins',
    ],
    'tags' => [
        'title' => 'Étiquettes',
        'pending' => 'Étiquettes en attente',
        'banned' => 'Tag Banni',
    ],
    'reports' => [
        'title' => 'Signaler',
    ],
    'feed' => [
        'title' => 'Publications du flux',
        'subtitle' => ':count total de publications créées',
    ],
    'wallpapers' => [
        'title' => 'Wallpapers',
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
        'title' => 'Commentaire',
        'subtitle' => ':count total de commentaires postés',
        'deleted' => [
            'title' => 'Commentaire supprimer',
            'subtitle' => ':count total de commentaires supprimés',
        ]
    ]
];
