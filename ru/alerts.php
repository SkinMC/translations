<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Alerts (Notifications) Lines
    |--------------------------------------------------------------------------
    |
    |
    */
    'follower' => [
        'title' => 'Новый подписчик',
        'text' => ':user is now following you.',
    ],
    'comment' => [
        'new' => [
            'title' => ':model комментарий',
            'text' => ':user commented on your :model.',
        ],
        'reply' => [
            'title' => 'Reply to a :model comment',
            'text' => ':user replied to a :model comment.',
        ],
        'mention' => [
            'title' => 'Новое упоминание',
            'text' => ':user mentioned you in a comment.',
        ],
        'like' => [
            'title' => 'Комментарий лайкнул',
            'text' => ':user liked your comment.',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Post liked',
            'text' => ':user liked your post.',
        ],
        'mention' => [
            'title' => 'Новое упоминание',
            'text' => ':user mentioned you in their post.',
        ],
        'repost' => [
            'title' => 'Репост',
            'text' => ':user reposted your post.',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'Новое сообщение',
            'text' => ':user отправил вам сообщение.',
        ],
        'group_invitation' => [
            'title' => 'Group chat invitation',
            'text' => ':user invited you to join the group chat ":group".',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'You levelled up!',
            'text' => 'Поздравляем с достижением :level уровня!',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'Добавлено на доску',
            'text' => ':пользователь добавил вас в качестве соавтора на доску «:board».',
        ],
    ],
    'skin_editor' => [
        'project_invitation' => [
            'title' => 'Skin project invitation',
            'text' => ':user invited you to edit ":project". Open the invitation to join.',
        ],
    ],
    'report' => [
        'created' => [
            'title' => 'Report received (case :id)',
            'text' => 'Your report has been sent to our moderation team for review.',
        ],
        'resolved' => [
            'title' => 'Report reviewed (case :id)',
            'text' => 'Our moderation team has completed its review and closed your report.',
        ],
        'dismissed' => [
            'title' => 'Report dismissed (case :id)',
            'text' => 'Our moderation team reviewed your report and took no action. If something was missed, report the specific content and include details to help us review it.',
        ],
    ],
    'system' => [
        'discord_invite' => [
            'title' => 'Join the SkinMC Discord',
            'text' => 'Meet other Minecraft players in the SkinMC Discord server.',
        ],
    ],
    'server' => [
        'review_received' => [
            'title' => 'Новый обзор на :server',
            'text' => 'Ваш объявление «:server» получило новый отзыв (:rating/5).',
        ],
        'low_rating' => [
            'title' => 'Рейтинг понижен для :server',
            'text' => 'Ваша средняя оценка сейчас составляет :rating/5 по результатам :reviews отзывов. Рассмотрите возможность просмотра отзывов в разделе «Статистика».',
        ],
        'vote_milestone' => [
            'title' => 'Этап голосования достигнут',
            'text' => ':сервер достиг :голосов голосов за последние 30 дней.',
        ],
        'approved' => [
            'title' => ':сервер был одобрен',
            'text' => 'Ваше объявление прошло проверку и теперь может быть опубликовано после выполнения всех требований.',
        ],
        'unapproved' => [
            'title' => ':сервер нуждается в обновлении',
            'text' => 'Ваша заявка была переведена из статуса «Утверждена». Просмотрите детали своей заявки и обновите их при необходимости.',
        ],
        'published' => [
            'title' => ':server в настоящее время работает',
            'text' => 'Ваша запись опубликована и отображается в списке серверов.',
        ],
        'unpublished' => [
            'title' => ':сервер был удален из публикации',
            'text' => 'Ваша объявление больше не отображается публично. Проверьте статус объявления в своей панели управления.',
        ],
        'verified' => [
            'title' => ':сервер теперь проверен',
            'text' => 'Ваше объявление получило значок подтверждения.',
        ],
        'photo_requirement_complete' => [
            'title' => 'Требования к фотографиям выполнены для :сервер',
            'published_text' => 'Теперь у вас есть как минимум 5 изображений, и ваше объявление снова доступно.',
            'pending_text' => 'Теперь у вас есть как минимум 5 изображений. Ваше объявление готово к модерации.',
        ],
        'photo_requirement_missing' => [
            'title' => 'Добавить больше фотографий на :сервер',
            'text' => 'Your listing needs at least :minimum photos to be published. Photos still needed: :remaining.',
        ],
        'reminder_no_images' => [
            'title' => 'На вашем сервере все еще нет фотографий',
            'text' => 'Add photos to complete your server listing.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Ваша заявка все еще находится на рассмотрении',
            'text' => 'Your listing is awaiting moderation. Check that its details and photos are up to date.',
        ],
    ],
    'wallpaper' => [
        'challenge_winner' => [
            'title' => 'Победитель конкурса обоев',
            'text' => 'Ваши обои ":title" были выбраны победителем за :month.',
        ],
    ],
    'streak' => [
        'at_risk' => [
            'title' => ':days-day серия под угрозой',
            'text_send_now' => 'Отправьте сообщение до полуночи по Гринвичу, чтобы сохранить свою серию.',
            'text_waiting_other' => 'Вы ответили сегодня. Вам еще нужно получить один ответ до полуночи по Гринвичу.',
        ],
    ],
];
