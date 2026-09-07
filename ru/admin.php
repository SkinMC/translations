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
        'title' => 'Обои',
        'challenge' => [
            'title' => 'Конкурс обоев',
            'description' => 'Выберите победителя за :challenge_month. Выбранные обои будут размещены на главной странице в :display_month.',
            'back_to_moderation' => 'Назад к модерации',
            'month_label' => 'Месяц конкурса',
            'previous_month' => 'Предыдущий месяц',
            'next_month' => 'Следующий месяц',
            'shortlisted' => ':count в шорт-листе',
            'winner_selected' => 'Победитель выбран',
            'no_winner_selected' => 'Победитель не выбран',
            'selected_winner' => 'Выбранный победитель',
            'displays_on_home' => 'Отображается на главной странице в :month',
            'open_wallpaper' => 'Открыть обои',
            'clear_reason_placeholder' => 'Причина очистки (необязательно)',
            'clear_confirm' => 'Очистить победителя за :month?',
            'clear_winner' => 'Очистить победителя',
            'winner_unavailable' => 'Выбранные обои недоступны.',
            'display_month' => 'Месяц отображения: :month',
            'choose_from_shortlist' => 'Выберите обои из списка ниже.',
            'recent_changes' => 'Последние изменения',
            'action_replaced' => 'Заменён победитель',
            'action_set' => 'Назначить победителя',
            'action_cleared' => 'Победитель сброшен',
            'log_actor' => 'от :name',
            'log_none' => 'Нет',
            'log_empty' => 'Нет изменений победителя за этот месяц.',
            'table_rank' => '#',
            'table_wallpaper' => 'Обои',
            'table_creator' => 'Создатель',
            'table_stats' => 'Статистика',
            'table_action' => 'Действие',
            'stats_views' => ':count просмотров',
            'stats_downloads' => ':count загрузок',
            'stats_favourites' => ':count избранных',
            'reason_placeholder' => 'Причина (необязательно)',
            'set_winner' => 'Назначить победителя',
            'selected' => 'Выбрано',
            'no_entries' => 'Нет подходящих работ для конкурса за :month.',
            'unknown_creator' => 'Неизвестный создатель',
            'unknown_user' => 'Unknown',
            'system_user' => 'Система',
            'flash_saved' => 'Победитель конкурса сохранён.',
            'flash_cleared' => 'Победитель конкурса сброшен.',
            'flash_none_to_clear' => 'Победитель за этот месяц не был установлен.',
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
