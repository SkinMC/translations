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
        'title' => 'Instrumentpanel',
        'total-members' => 'Antal medlemmar',
        'claimed-profiles' => 'Registrerade profiler',
        'profiles' => 'Profiler',
        'skins' => 'Utseenden',
        'users' => 'Användare',
        'last-30-days' => 'Senaste 30 dagarna',
        'members' => 'Medlemmar',
        'usernames' => 'Användarnamn',
    ],
    'help' => [
        'title' => 'Hjälp',
        'subtitle' => 'Användbara tips för SkinMC instrumentpanelen',
    ],
    'users' => [
        'title' => 'Användare',
        'subtitle' => ':count antal registrerade användare',
        'list' => [
            'username' => 'Användarnamn',
            'email' => 'E-post',
            'status' => 'Status',
            'role' => 'Roll'
        ],
    ],
    'skins' => [
        'title' => 'Utseenden',
    ],
    'tags' => [
        'title' => 'Taggar',
        'pending' => 'Väntande taggar',
        'banned' => 'Bannade taggar',
    ],
    'reports' => [
        'title' => 'Rapporteringar',
    ],
    'feed' => [
        'title' => 'Inlägg på flödet',
        'subtitle' => ':count antal inlägg skapade',
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
        'title' => 'Kommentarer',
        'subtitle' => ':count antal kommentarer publicerade',
        'deleted' => [
            'title' => 'Raderade kommentarer',
            'subtitle' => ':count antal raderade kommentarer',
        ]
    ]
];
