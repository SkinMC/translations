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
        'title' => 'متابع جديد',
        'text' => ':user يتابعك الآن!',
    ],
    'comment' => [
        'new' => [
            'title' => 'تعليق على :model',
            'text' => ':user قدم تعليقا على :model',
        ],
        'reply' => [
            'title' => 'الرد على تعليق :model',
            'text' => ':user رد على تعليق :model',
        ],
        'mention' => [
            'title' => 'New mention',
            'text' => ':user mentioned you in a comment!',
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'تلقيت إعجاب',
            'text' => ':user أعجب ببوستك!',
        ],
        'mention' => [
            'title' => 'حد منشنك',
            'text' => ':user منشنك في البوست!',
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => ':user reposted your post!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'لقد ارتفع مستواك!',
            'text' => 'تهانينا على الوصول للمستوى :level!',
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
            'title' => 'لقد تلقينا بلاغك! (القضية رقم :id)',
            'text' => 'فريقنا يعمل عليها وسوف ينظر فيها على الفور. شكرا لكونك رائع ومساعدتنا على إبقاء الأمور رائعة! ',
        ],
        'resolved' => [
            'title' => 'قمنا بمراجعة البلاغ الخاص بك (القضية رقم :id)',
            'text' => 'مرحبًا، تم الاهتمام بالمسألة المبلغ عنها وتم فرزها الآن. شكراً لكونك بطلاً خارقاً لمجتمعنا!',
        ],
        'dismissed' => [
            'title' => 'تحديث البلاغ الخاص بك (القضية رقم :id)',
            'text' => 'بعد بعض أعمال التحقق، وجدنا أن المحتوى الذي أبلغت عنه لا يتعارض مع المبادئ التوجيهية الخاصة بنا. إذا كنت تريد منا مراجعة شيء محدد، يرجى التأكد من أنك تبلغ عن سكن، الملف الشخصي، إلخ، وتوفير كلام إضافي عند الحاجة. شكرا على اهتمامك ومشاركتك في مجتمعنا!',
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
    'streak' => [
        'at_risk' => [
            'title' => ':days-day streak at risk',
            'text_send_now' => 'Send a message before midnight UTC to keep your streak alive.',
            'text_waiting_other' => 'You replied today. You still need one reply back before midnight UTC.',
        ],
    ],
];
