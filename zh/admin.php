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
            'email' => '电子邮箱',
            'status' => '状态',
            'role' => '身份',
        ],
    ],
    'skins' => [
        'title' => '皮肤',
    ],
    'tags' => [
        'title' => '标签',
        'pending' => '待定标签',
    ],
    'reports' => [
        'title' => '举报',
        'empty' => '',
    ],
    'profiles' => [
        'empty' => '',
    ],
    'feed' => [
        'title' => '订阅帖子',
        'subtitle' => '共创建了 :count 个帖子',
    ],
    'wallpapers' => [
        'title' => '壁纸',
        'challenge' => [
            'title' => '壁纸比拼',
            'description' => '选择 :challenge_month月的获胜者。选中的壁纸将在 :display_month月的主页上展示。',
            'back_to_moderation' => '返回审核页面',
            'month_label' => '',
            'previous_month' => '上一月',
            'next_month' => '下一月',
            'shortlisted' => '',
            'winner_selected' => '已选获胜者',
            'no_winner_selected' => '尚未选择获胜者',
            'selected_winner' => '已选获胜者',
            'displays_on_home' => '',
            'open_wallpaper' => '打开壁纸',
            'clear_reason_placeholder' => '清除原因(可选)',
            'clear_confirm' => '确定清除 :month 的获胜者吗？',
            'clear_winner' => '清除获胜者',
            'winner_unavailable' => '所选壁纸不可用。',
            'display_month' => '显示月份: :month',
            'choose_from_shortlist' => '从下面的候选名单中选择一张壁纸。',
            'recent_changes' => '最近变化',
            'action_replaced' => '已替换的获胜者',
            'action_set' => '设置获胜者',
            'action_cleared' => '已清除的获胜者',
            'log_actor' => '',
            'log_none' => '',
            'log_empty' => '本月无获胜者变更记录。',
            'table_rank' => '#',
            'table_wallpaper' => '壁纸',
            'table_creator' => '作者',
            'table_stats' => '',
            'table_action' => '',
            'stats_views' => '',
            'stats_downloads' => '',
            'stats_favourites' => '',
            'reason_placeholder' => '原因 (可选)',
            'set_winner' => '设置获胜者',
            'selected' => '',
            'no_entries' => '',
            'unknown_creator' => '',
            'unknown_user' => '',
            'system_user' => '',
            'flash_saved' => '',
            'flash_cleared' => '',
            'flash_none_to_clear' => '',
        ],
    ],
    'comments' => [
        'title' => '评论',
        'subtitle' => ':count评论已发布',
        'deleted' => [
            'title' => '评论已删除',
            'subtitle' => ':count评论已删除',
        ],
    ],
];
