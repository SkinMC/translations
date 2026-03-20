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
        'title' => '后台',
        'total-members' => '会员数',
        'claimed-profiles' => '已申领的个人资料',
        'profiles' => '个人资料',
        'skins' => '皮肤',
        'users' => '用户',
        'last-30-days' => '最近30天',
        'members' => '会员',
        'usernames' => '用户名',
    ],
    'help' => [
        'title' => '帮助',
        'subtitle' => 'SkinMC 控制面板的有用提示',
    ],
    'users' => [
        'title' => '用户',
        'subtitle' => ':count 总计用户注册',
        'list' => [
            'username' => '用户名',
            'email' => '电子邮箱',
            'status' => '状态',
            'role' => '身份'
        ],
    ],
    'skins' => [
        'title' => '皮肤',
    ],
    'tags' => [
        'title' => '标签',
        'pending' => '待定标签',
        'banned' => '已封禁标签',
    ],
    'reports' => [
        'title' => '举报',
    ],
    'feed' => [
        'title' => '订阅帖子',
        'subtitle' => ':count 已创建的全部帖子',
    ],
    'wallpapers' => [
        'title' => '壁纸',
        'challenge' => [
            'title' => '壁纸比拼',
            'description' => '选择 :challenge_month月的获胜者。选中的壁纸将在 :display_month月的主页上展示。',
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
        'title' => '评论',
        'subtitle' => ':count评论已发布',
        'deleted' => [
            'title' => '评论已删除',
            'subtitle' => ':count评论已删除',
        ]
    ]
];
