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
        'text' => '',
    ],
    'comment' => [
        'new' => [
            'title' => ':model yorumu',
            'text' => '',
        ],
        'reply' => [
            'title' => '',
            'text' => '',
        ],
        'mention' => [
            'title' => 'Yeni bahsetme',
            'text' => '',
        ],
        'like' => [
            'title' => 'Yorum beğenildi',
            'text' => '',
        ],
    ],
    'post' => [
        'like' => [
            'title' => '',
            'text' => '',
        ],
        'mention' => [
            'title' => 'Yeni bahsetme',
            'text' => '',
        ],
        'repost' => [
            'title' => 'Yeniden paylaşım',
            'text' => '',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'Yeni mesaj',
            'text' => ':user sana bir mesaj gönderdi.',
        ],
        'group_invitation' => [
            'title' => '',
            'text' => '',
        ],
    ],
    'level' => [
        'up' => [
            'title' => '',
            'text' => ':level seviyeye ulaştığınız için tebrikler!',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'Bir panoya eklendi',
            'text' => ':user seni ":board" panosuna katkıda bulunan olarak ekledi.',
        ],
    ],
    'skin_editor' => [
        'project_invitation' => [
            'title' => '',
            'text' => '',
        ],
    ],
    'report' => [
        'created' => [
            'title' => '',
            'text' => '',
        ],
        'resolved' => [
            'title' => '',
            'text' => '',
        ],
        'dismissed' => [
            'title' => '',
            'text' => '',
        ],
    ],
    'system' => [
        'discord_invite' => [
            'title' => '',
            'text' => '',
        ],
    ],
    'server' => [
        'review_received' => [
            'title' => ':server üzerinde yeni inceleme',
            'text' => ':server" ilanınız yeni bir inceleme aldı (:rating/5).',
        ],
        'low_rating' => [
            'title' => ':server için puan düştü',
            'text' => ':reviews inceleme genelinde ortalama puanınız şu anda :rating/5. Analizler bölümündeki geri bildirimleri gözden geçirmeyi düşünün.',
        ],
        'vote_milestone' => [
            'title' => 'Oy hedef zincirine ulaşıldı',
            'text' => ':server son 30 günde :votes oya ulaştı.',
        ],
        'approved' => [
            'title' => ':server onaylandı',
            'text' => 'İlanınız incelemeyi geçti ve tüm gereksinimler karşılandığında yayına girmeye hak kazandı.',
        ],
        'unapproved' => [
            'title' => ':server güncelleme gerektiriyor',
            'text' => 'İlanınız onaylı durumdan çıkarıldı. İlan detaylarınızı inceleyin ve gerektiği şekilde güncelleyin.',
        ],
        'published' => [
            'title' => ':server artık yayında',
            'text' => 'İlanınız yayınlandı ve sunucu listesinde görünür durumda.',
        ],
        'unpublished' => [
            'title' => ':server yayından kaldırıldı',
            'text' => 'İlanınız artık herkese açık olarak görünmüyor. Kontrol panelinizden ilan durumunu gözden geçirin.',
        ],
        'verified' => [
            'title' => ':server artık doğrulandı',
            'text' => 'İlanınız bir doğrulama rozeti aldı.',
        ],
        'photo_requirement_complete' => [
            'title' => ':server için fotoğraf gereksinimi tamamlandı',
            'published_text' => 'Artık en az 5 görseliniz var ve ilanınız tekrar yayında.',
            'pending_text' => 'Artık en az 5 görseliniz var. İlanınız moderasyon için hazır.',
        ],
        'photo_requirement_missing' => [
            'title' => ':server için daha fazla fotoğraf ekle',
            'text' => '',
        ],
        'reminder_no_images' => [
            'title' => 'Sunucu ilanınızda hâlâ fotoğraf yok',
            'text' => '',
        ],
        'reminder_pending_too_long' => [
            'title' => 'İlanınız hâlâ inceleme bekliyor',
            'text' => '',
        ],
    ],
    'wallpaper' => [
        'challenge_winner' => [
            'title' => 'Duvar kağıdı yarışması kazananı',
            'text' => '":title" başlıklı duvar kağıdınız :month ayı için kazanan seçildi.',
        ],
    ],
    'streak' => [
        'at_risk' => [
            'title' => ':days günlük seriniz riskte',
            'text_send_now' => 'Serinizi devam ettirmek için gece yarısından (UTC) önce bir mesaj gönderin.',
            'text_waiting_other' => 'Bugün yanıt verdiniz. Serinizi korumak için gece yarısından (UTC) önce hâlâ geri bir yanıta ihtiyacınız var.',
        ],
    ],
];
