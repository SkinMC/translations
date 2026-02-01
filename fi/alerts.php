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
        'title' => 'Uusi seuraaja',
        'text' => ':user seuraa nyt sinua!'
    ],
    'comment' => [
        'new' => [
            'title' => ':model kommentti',
            'text' => ':user teki kommentin sinun :model'
        ],
        'reply' => [
            'title' => 'Vastaa :model kommentilla',
            'text' => ':user vastasi :model kommenttiin'
        ],
        'like' => [
            'title' => 'Tykätty kommentti',
            'text' => ':user tykkäsi kommentistasi!'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'Tykkäys vastaanotettu',
            'text' => ':user tykkäsi julkaisustasi!',
        ],
        'mention' => [
            'title' => 'Uusi maininta',
            'text' => ':user mainitsi sinut heidän julkaisussaan!'
        ],
        'repost' => [
            'title' => 'Uudelleenjulkaise',
            'text' => ':user uudelleenjulkaisi julkaisusi!'
        ]
    ],
    'level' => [
        'up' => [
            'title' => 'Olet noussut seuraavalle tasolle!',
            'text' => 'Onnittelut tason :level saavuttamisesta!'
        ]
    ],
    'report' => [
        'created' => [
            'title' => 'Olemme vastaanottaneet raporttisi! (Tapaus :id)',
            'text' => 'Tiimimme tutkii asiaa välittömästi. Kiitos, että olet mahtava ja autat meitä pitämään asiat rauhallisina! '
        ],
        'resolved' => [
            'title' => 'Olemme tarkastaneet raporttisi! (Tapaus :id)',
            'text' => 'Hei siellä, raportoitu asia on hoidettu ja on nyt selvitetty. Kiitos, että olet yhteisömme supersankari!',
        ],
        'dismissed' => [
            'title' => 'Pävitys raporttiisi! (Tapaus :id)',
            'text' => 'Tutkimustyön jälkeen olemme havainneet, että ilmoittamasi sisältö ei ole ohjeidemme vastaista. Jos haluat, että tarkistamme jotain tiettyä asiaa, varmista, että ilmoitat skinin, profiilin jne. ja annat tarvittaessa lisätietoja. Kiitos huolenpidostasi ja osallistumisestasi yhteisöömme!',
        ]
    ]
];
