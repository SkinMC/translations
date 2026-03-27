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
        'title' => '대시보드',
        'total-members' => '총 회원 수',
        'claimed-profiles' => '등록된 프로필 수',
        'profiles' => '프로필',
        'skins' => '스킨',
        'users' => '사용자',
        'last-30-days' => '최근 30일',
        'members' => '회원',
        'usernames' => '사용자 이름',
    ],
    'help' => [
        'title' => '도움말',
        'subtitle' => 'SkinMC 대시보드를 위한 유용한 팁',
    ],
    'users' => [
        'title' => '사용자',
        'subtitle' => '가입한 총 회원 수 :count명',
        'list' => [
            'username' => '사용자 이름',
            'email' => '이메일 주소',
            'status' => '상태',
            'role' => '역할'
        ],
    ],
    'skins' => [
        'title' => '스킨',
    ],
    'tags' => [
        'title' => '태그',
        'pending' => '보류 중인 태그',
        'banned' => '차단된 태그',
    ],
    'reports' => [
        'title' => '보고서',
    ],
    'feed' => [
        'title' => '게시물 피드',
        'subtitle' => '총 생성된 게시물 :count개',
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
        'title' => '댓글 수',
        'subtitle' => '총 작성된 댓글 :count개',
        'deleted' => [
            'title' => '삭제된 댓글 수',
            'subtitle' => '총 삭제된 댓글 :count개',
        ]
    ]
];
