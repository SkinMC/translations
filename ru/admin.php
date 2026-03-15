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
        'title' => 'Панель управления',
        'total-members' => 'Всего участников',
        'claimed-profiles' => 'Полученные профили',
        'profiles' => 'Профили',
        'skins' => 'Скины',
        'users' => 'Пользователи',
        'last-30-days' => 'Последние 30 дней',
        'members' => 'Участники',
        'usernames' => 'Логины',
    ],
    'help' => [
        'title' => 'Справка',
        'subtitle' => 'Полезные советы для панели SkinMC',
    ],
    'users' => [
        'title' => 'Пользователи',
        'subtitle' => ':count всего пользователей зарегистрировались',
        'list' => [
            'username' => 'Логин',
            'email' => 'Электронная почта',
            'status' => 'Статус',
            'role' => 'Роль'
        ],
    ],
    'skins' => [
        'title' => 'Скины',
    ],
    'tags' => [
        'title' => 'Тэги',
        'pending' => 'Нерассмотренные теги',
        'banned' => 'Заблокированные тэги',
    ],
    'reports' => [
        'title' => 'Жалобы',
    ],
    'feed' => [
        'title' => 'Посты в ленте',
        'subtitle' => ':count всего постов создано',
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
        'title' => 'Комментарии',
        'subtitle' => ':count всего опубликованных комментариев',
        'deleted' => [
            'title' => 'Удаленные комментарии',
            'subtitle' => ':count всего удаленных комментариев',
        ]
    ]
];
