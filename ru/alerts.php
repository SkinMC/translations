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
        'text' => ':user теперь ваш подписчик!',
    ],
    'comment' => [
        'new' => [
            'title' => ':model комментарий',
            'text' => ':user прокомментировал ваш :model',
        ],
        'reply' => [
            'title' => 'Ответить на :model комментарий',
            'text' => ':user ответил на :model комментарий',
        ],
        'like' => [
            'title' => 'Комментарий лайкнул',
            'text' => ':user лайкнул ваш комментарий!',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Кто-то вас лайкнул',
            'text' => ':user лайкнул ваш пост!',
        ],
        'mention' => [
            'title' => 'Новое упоминание',
            'text' => ':user упомянул вас в своем посте!',
        ],
        'repost' => [
            'title' => 'Репост',
            'text' => ':user перепостил ваш пост!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Ваш уровень повышен!',
            'text' => 'Поздравляем с достижением :level уровня!',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'Added to a board',
            'text' => ':user added you as a collaborator to the board ":board".',
        ],
    ],
    'report' => [
        'created' => [
            'title' => 'Мы получили вашу жалобу! (Номер :id)',
            'text' => 'Ваша жалоба сформирована и наша команда рассмотрит её в ближайшее время.',
        ],
        'resolved' => [
            'title' => 'Ваша жалоба под номером :id рассмотрена',
            'text' => 'Отправленная вами проблема была рассмотрена и прямо сейчас ведётся её решение. Спасибо, что помогаете нам с каждым разом становиться всё лучше! Вы - настоящий герой этого сообщества!',
        ],
        'dismissed' => [
            'title' => 'Жалоба под номером :id отклонена',
            'text' => 'После тщательной проверки мы не обнаружили ничего противоречащего нашим правилам в контенте, на который вы пожаловались. Если вы хотите, чтобы мы рассмотрели что-то конкретное, то убедитесь, что вы пожаловались на скин, профиль и т.п., а также предоставили контекст в необходимых местах. Спасибо за вашу заботу и увлечённость в наше сообщество!',
        ],
    ],
    'server' => [
        'review_received' => [
            'title' => 'New review on :server',
            'text' => 'Your listing ":server" received a new review (:rating/5).',
        ],
        'low_rating' => [
            'title' => 'Rating dropped for :server',
            'text' => 'Your average rating is now :rating/5 across :reviews reviews. Consider reviewing feedback in Insights.',
        ],
        'vote_milestone' => [
            'title' => 'Vote milestone reached',
            'text' => ':server reached :votes votes in the last 30 days.',
        ],
        'approved' => [
            'title' => ':server was approved',
            'text' => 'Your listing passed review and is now eligible to go live once all requirements are met.',
        ],
        'unapproved' => [
            'title' => ':server needs updates',
            'text' => 'Your listing was moved out of approved status. Review your listing details and update as needed.',
        ],
        'published' => [
            'title' => ':server is now live',
            'text' => 'Your listing is published and visible on the server list.',
        ],
        'unpublished' => [
            'title' => ':server was unpublished',
            'text' => 'Your listing is no longer visible publicly. Review listing status in your dashboard.',
        ],
        'photo_requirement_complete' => [
            'title' => 'Photo requirement complete for :server',
            'published_text' => 'You now have at least 5 images and your listing is live again.',
            'pending_text' => 'You now have at least 5 images. Your listing is ready for moderation.',
        ],
        'photo_requirement_missing' => [
            'title' => 'Add more photos to :server',
            'text' => 'Your listing needs :remaining more photo(s) to reach the minimum of :minimum and stay publishable.',
        ],
        'reminder_no_images' => [
            'title' => 'Your server listing still has no photos',
            'text' => 'Add at least 5 photos to improve trust and move your listing toward publication.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Your listing is still pending review',
            'text' => 'Your listing has been pending for a while. Double-check details and photos to help keep review smooth.',
        ],
    ],
];
