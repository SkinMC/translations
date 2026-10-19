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
        'text' => ':user is now following you.',
    ],
    'comment' => [
        'new' => [
            'title' => ':model yorumu',
            'text' => ':user commented on your :model.',
        ],
        'reply' => [
            'title' => 'Reply to a :model comment',
            'text' => ':user replied to a :model comment.',
        ],
        'mention' => [
            'title' => 'Yeni bahsetme',
            'text' => ':user mentioned you in a comment.',
        ],
        'like' => [
            'title' => 'Yorum beğenildi',
            'text' => ':user liked your comment.',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Post liked',
            'text' => ':user liked your post.',
        ],
        'mention' => [
            'title' => 'Yeni bahsetme',
            'text' => ':user mentioned you in their post.',
        ],
        'repost' => [
            'title' => 'Yeniden paylaşım',
            'text' => ':user reposted your post.',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'Yeni mesaj',
            'text' => ':user sana bir mesaj gönderdi.',
        ],
        'group_invitation' => [
            'title' => 'Group chat invitation',
            'text' => ':user invited you to join the group chat ":group".',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'You levelled up!',
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
            'text' => 'Your listing needs at least :minimum photos to be published. Photos still needed: :remaining.',
        ],
        'reminder_no_images' => [
            'title' => 'Sunucu ilanınızda hâlâ fotoğraf yok',
            'text' => 'Add photos to complete your server listing.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'İlanınız hâlâ inceleme bekliyor',
            'text' => 'Your listing is awaiting moderation. Check that its details and photos are up to date.',
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
