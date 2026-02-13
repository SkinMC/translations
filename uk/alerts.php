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
        'title' => 'Новий підписник',
        'text' => ':user підписується на вас!',
    ],
    'comment' => [
        'new' => [
            'title' => ':model коментар',
            'text' => ':user коментує :model',
        ],
        'reply' => [
            'title' => 'Відповідь на коментар :model',
            'text' => ':user відповідає на коментар :model',
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Хтось поставив вподобайку',
            'text' => ':user сподобався ваш допис!',
        ],
        'mention' => [
            'title' => 'Нова згадка',
            'text' => ':user згадує вас у своєму дописі!',
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => ':user reposted your post!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Ви підвищили свій рівень!',
            'text' => 'Вітаємо з досягненням рівня :level!',
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
            'title' => 'Ми отримали ваш звіт! (Регістр :id)',
            'text' => 'Наша команда працює над цим питанням та негайно його розгляне. Дякуємо за те, що ви чудові та допомагаєте нам зберігати спокій! ',
        ],
        'resolved' => [
            'title' => 'Ми розглянули вашу скаргу (Регістр :id)',
            'text' => 'Привіт, проблема, про яку ви повідомили, була вирішена і зараз знаходиться на стадії вирішення. Дякуємо за те, що ви є такими супергероями нашої спільноти!',
        ],
        'dismissed' => [
            'title' => 'Оновлення до вашої скарги (Регістр :id)',
            'text' => 'Провівши розслідування, ми з’ясували, що вміст, про який ви повідомили, не суперечить нашим правилам. Якщо бажаєте, щоб ми перевірили щось конкретне, будь ласка, обов’язково вказуйте скін, профіль тощо, а також надайте додатковий контекст, якщо це необхідно. Дякуємо за вашу турботу та участь у нашій спільноті!',
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
        'verified' => [
            'title' => ':server is now verified',
            'text' => 'Your listing received a verification badge.',
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
