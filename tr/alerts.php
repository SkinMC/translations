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
        'title' => 'Yeni takipçi',
        'text' => ':kullanıcı seni takip ediyor!',
    ],
    'comment' => [
        'new' => [
            'title' => ':model yorumu',
            'text' => ':kullanıcı senin :model \'ine yorum yaptı',
        ],
        'reply' => [
            'title' => ':model yorumuna cevap ver',
            'text' => ':kullanıcı :model yorumuna cevap verdi',
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
            'title' => 'Beğeni alındı',
            'text' => ':kullanıcı gönderini beğendi!',
        ],
        'mention' => [
            'title' => 'Yeni bahsetme',
            'text' => ':kullanıcı gönderisinde senden bahsetti!',
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => ':user reposted your post!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Seviye atladın!',
            'text' => ':level seviyeye ulaştığınız için tebrikler!',
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
            'title' => 'Raporunuzu aldık! (Vaka :id)',
            'text' => 'Ekibimiz bu konuyla ilgileniyor ve hemen inceleyecek. Harika olduğun ve işleri sakin tutmamıza yardımcı olduğun için teşekkürler! ',
        ],
        'resolved' => [
            'title' => 'Raporunuzu inceledik (Vaka :id)',
            'text' => 'Merhaba, bildirilen sorun çözüldü ve artık halledildi. Topluluğumuzun süper kahramanı olduğun için teşekkürler!',
        ],
        'dismissed' => [
            'title' => 'Raporunuzu güncelleyin (Vaka :id)',
            'text' => 'Biraz araştırma yaptıktan sonra, bildirdiğiniz içeriğin kurallarımıza aykırı olmadığını tespit ettik. Belirli bir şeyi incelememizi istiyorsanız, lütfen skin, profil vb. bilgileri bildirip gerektiğinde ek bilgiler de ekleyin. İlginiz ve topluluğumuza katılımınız için teşekkür ederiz!',
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
