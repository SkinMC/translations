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
        'title' => 'Új követő',
        'text' => ':user követ téged!',
    ],
    'comment' => [
        'new' => [
            'title' => 'Hozzászólás ehhez: :model',
            'text' => ':user hozzászólt a :model -led hez.',
        ],
        'reply' => [
            'title' => 'Új válasz ennél: :model',
            'text' => ':user válaszolt a hozzászólásodra ezen: :model',
        ],
        'like' => [
            'title' => 'Hozzászólás kedvelve',
            'text' => ':user: kedveli a hozzászólásod!',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Kedvelést szereztél',
            'text' => ':user kedvelte a bejegyzésedet!',
        ],
        'mention' => [
            'title' => 'Új említés',
            'text' => ':user megemlített Téged!',
        ],
        'repost' => [
            'title' => 'Újraposztolás',
            'text' => ':user: újraposztolta a posztod!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Szintet léptél!',
            'text' => 'Gratulálunk a(z) :level:. szint eléréséhez!',
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
            'title' => 'Hozzánk került a bejelentésed! (Ügy :id)',
            'text' => 'A csapatunk dolgozik rajta, és azonnal vet egy pillantást a problémádra. Köszönjük hogy ilyen király és fantasztikus vagy hogy segítesz nekünk nyugisan tartani a dolgokat! ',
        ],
        'resolved' => [
            'title' => 'Megnéztük a jelentésedet (Ügy :id)',
            'text' => 'Üdv, a bejelentett problémáról már gondoskodtunk, és szortíroztuk. Köszönjük hogy a szuperhőse vagy a közösségünknek!',
        ],
        'dismissed' => [
            'title' => 'Az ügyed frissítve lett (Ügy :id)',
            'text' => 'Egy kis kutatómunka után megtaláltuk hogy a probléma amit bejelentettél nem megy szembe a szabályainkkal. Ha szeretnéd hogy valami specifikusba nézzünk bele, kérlek bizonyosodj meg róla hogy a skin-t, profilt, stb. amikor bejelented, írj mellé részletesebb információt ha kell. Köszönjük hogy érdekel hogy mi történik a közösségünkben!',
        ],
    ],
];
