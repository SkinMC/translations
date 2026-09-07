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
        'title' => 'Dashboard',
        'total-members' => 'Gesamte Mitglieder',
        'claimed-profiles' => 'Beanspruchte Profile',
        'profiles' => 'Profile',
        'skins' => 'Skins',
        'users' => 'Benutzer',
        'last-30-days' => 'Letzte 30 Tage',
        'members' => 'Mitglieder',
        'usernames' => 'Benutzernamen',
    ],
    'help' => [
        'title' => 'Hilfe',
        'subtitle' => 'Nützliche Tipps für das SkinMC Dashboard',
    ],
    'users' => [
        'title' => 'Benutzer',
        'subtitle' => ':count insgesamt registrierte Benutzer',
        'list' => [
            'username' => 'Benutzername',
            'email' => 'E-Mail',
            'status' => 'Status',
            'role' => 'Rolle'
        ],
    ],
    'skins' => [
        'title' => 'Skins',
    ],
    'tags' => [
        'title' => 'Tags',
        'pending' => 'Ausstehende Tags',
        'banned' => 'Gebannte Tags',
    ],
    'reports' => [
        'title' => 'Meldungen',
    ],
    'feed' => [
        'title' => 'Feed-Beiträge',
        'subtitle' => ':count insgesamt erstellte Beiträge',
    ],
    'wallpapers' => [
        'title' => 'Hintergrundbilder',
        'challenge' => [
            'title' => 'Hintergrundbilder-Challenge',
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
            'open_wallpaper' => 'Hintergrundbild öffnen',
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
            'set_winner' => 'Sieger festlegen',
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
        'title' => 'Kommentare',
        'subtitle' => ':count insgesamt gepostete Kommentare',
        'deleted' => [
            'title' => 'Gelöschte Kommentare',
            'subtitle' => ':count insgesamt gelöschte Kommentare',
        ]
    ]
];
