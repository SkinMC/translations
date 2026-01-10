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
        'text' => ':kullanıcı seni takip ediyor!'
    ],
    'comment' => [
        'new' => [
            'title' => ':model yorumu',
            'text' => ':kullanıcı senin :model \'ine yorum yaptı'
        ],
        'reply' => [
            'title' => ':model yorumuna cevap ver',
            'text' => ':kullanıcı :model yorumuna cevap verdi'
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'Beğeni alındı',
            'text' => ':kullanıcı gönderini beğendi!',
        ],
        'mention' => [
            'title' => 'Yeni bahsetme',
            'text' => ':kullanıcı gönderisinde senden bahsetti!'
        ]
    ],
    'level' => [
        'up' => [
            'title' => 'Seviye atladın!',
            'text' => ':level seviyeye ulaştığınız için tebrikler!'
        ]
    ],
    'report' => [
        'created' => [
            'title' => 'Raporunuzu aldık! (Vaka :id)',
            'text' => 'Ekibimiz bu konuyla ilgileniyor ve hemen inceleyecek. Harika olduğun ve işleri sakin tutmamıza yardımcı olduğun için teşekkürler! '
        ],
        'resolved' => [
            'title' => 'Raporunuzu inceledik (Vaka :id)',
            'text' => 'Merhaba, bildirilen sorun çözüldü ve artık halledildi. Topluluğumuzun süper kahramanı olduğun için teşekkürler!',
        ],
        'dismissed' => [
            'title' => 'Raporunuzu güncelleyin (Vaka :id)',
            'text' => 'Biraz araştırma yaptıktan sonra, bildirdiğiniz içeriğin kurallarımıza aykırı olmadığını tespit ettik. Belirli bir şeyi incelememizi istiyorsanız, lütfen skin, profil vb. bilgileri bildirip gerektiğinde ek bilgiler de ekleyin. İlginiz ve topluluğumuza katılımınız için teşekkür ederiz!',
        ]
    ]
];
