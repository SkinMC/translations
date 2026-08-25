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
            'title' => 'Yeni bahsetme',
            'text' => ':user bir yorumda senden bahsetti!',
        ],
        'like' => [
            'title' => 'Yorum beğenildi',
            'text' => ':user yorumunu beğendi!',
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
            'title' => 'Yeniden paylaşım',
            'text' => ':user gönderini yeniden paylaştı!',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'Yeni mesaj',
            'text' => ':user sana bir mesaj gönderdi.',
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
            'title' => 'Bir panoya eklendi',
            'text' => ':user seni ":board" panosuna katkıda bulunan olarak ekledi.',
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
    'system' => [
        'discord_invite' => [
            'title' => 'Discord\'a katıl',
            'text' => 'Selam, SkinMC Discord sunucusuna davetlisin.',
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
            'text' => 'İlanınızın en az :minimum fotoğrafa ulaşması ve yayınlanabilir kalması için :remaining fotoğraf(lar) daha gerekiyor.',
        ],
        'reminder_no_images' => [
            'title' => 'Sunucu ilanınızda hâlâ fotoğraf yok',
            'text' => 'Güvenilirliği artırmak ve ilanınızı yayınlanmaya yaklaştırmak için en az 5 fotoğraf ekleyin.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'İlanınız hâlâ inceleme bekliyor',
            'text' => 'İlanınız bir süredir beklemede. İncelemenin sorunsuz ilerlemesine yardımcı olmak için detayları ve fotoğrafları tekrar kontrol edin.',
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
