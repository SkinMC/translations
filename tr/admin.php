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
        'title' => 'Kontrol Paneli',
        'total-members' => 'Toplam Üyeler',
        'claimed-profiles' => 'Sahiplenilmiş Profiller',
        'profiles' => 'Profiller',
        'skins' => 'Kaplamalar',
        'users' => 'Kullanıcılar',
        'last-30-days' => 'Son 30 gün',
        'members' => 'Üyeler',
        'usernames' => 'Kullanıcı Adları',
    ],
    'help' => [
        'title' => 'Yardım',
        'subtitle' => 'SkinMC Kontrol paneli için yararlı ipuçları',
    ],
    'users' => [
        'title' => 'Kullanıcılar',
        'subtitle' => ':kayıtlı toplam kullanıcıları say',
        'list' => [
            'username' => 'Kullanıcı Adı',
            'email' => 'E-Posta',
            'status' => 'İstatistikler',
            'role' => 'Rol'
        ],
    ],
    'skins' => [
        'title' => 'Kaplamalar',
    ],
    'tags' => [
        'title' => 'Etiketler',
        'pending' => 'Beklemedeki etiketler',
        'banned' => 'Yasaklı etiketler',
    ],
    'reports' => [
        'title' => 'Şikayetler',
    ],
    'feed' => [
        'title' => 'Akış gönderileri',
        'subtitle' => ':oluşturulmuş toplam gönderileri say',
    ],
    'wallpapers' => [
        'title' => 'Duvar Kağıtları',
        'challenge' => [
            'title' => 'Duvar kağıdı yarışması',
            'description' => ':challenge_month ayı için kazananı seçin. Seçilen duvar kağıdı :display_month ayında ana sayfada öne çıkarılacaktır.',
            'back_to_moderation' => 'Moderasyona geri dön',
            'month_label' => 'Yarışma ayı',
            'previous_month' => 'Önceki ay',
            'next_month' => 'Sonraki ay',
            'shortlisted' => ':count aday gösterildi',
            'winner_selected' => 'Kazanan seçildi',
            'no_winner_selected' => 'Kazanan seçilmedi',
            'selected_winner' => 'Seçilen kazanan',
            'displays_on_home' => ':month ayında ana sayfada gösterilir',
            'open_wallpaper' => 'Duvar kağıdını aç',
            'clear_reason_placeholder' => 'Temizleme nedeni (isteğe bağlı)',
            'clear_confirm' => ':month ayı için kazananı temizle?',
            'clear_winner' => 'Kazananı temizle',
            'winner_unavailable' => 'Seçilen duvar kağıdı kullanılabilir değil.',
            'display_month' => 'Gösterim ayı: :month',
            'choose_from_shortlist' => 'Aşağıdaki kısa listeden bir duvar kağıdı seçin.',
            'recent_changes' => 'Son değişiklikler',
            'action_replaced' => 'Kazanan değiştirildi',
            'action_set' => 'Kazananı ayarla',
            'action_cleared' => 'Kazanan temizlendi',
            'log_actor' => ':name tarafından',
            'log_none' => 'Yok',
            'log_empty' => 'Bu ay için kayıtlı bir kazanan değişikliği yok.',
            'table_rank' => '#',
            'table_wallpaper' => 'Duvar Kağıdı',
            'table_creator' => 'Yapımcı',
            'table_stats' => 'İstatistikler',
            'table_action' => 'Eylem',
            'stats_views' => ':count izlenme',
            'stats_downloads' => ':count indirme',
            'stats_favourites' => ':count favori',
            'reason_placeholder' => 'Neden (Opsiyonel)',
            'set_winner' => 'Kazananı ayarla',
            'selected' => 'Seçili',
            'no_entries' => 'No eligible challenge entries for :month.',
            'unknown_creator' => 'Bilinmeyen yapımcı',
            'unknown_user' => 'Bilinmeyen',
            'system_user' => 'Sistem',
            'flash_saved' => 'Challenge winner saved.',
            'flash_cleared' => 'Challenge winner cleared.',
            'flash_none_to_clear' => 'No winner was set for this month.',
        ],
    ],
    'comments' => [
        'title' => 'Yorumlar',
        'subtitle' => ':gönderilmiş toplam yorumları say',
        'deleted' => [
            'title' => 'Silinmiş yorumlar',
            'subtitle' => ':silinmiş toplam yorumları say',
        ]
    ]
];
