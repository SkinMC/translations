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
        'title' => 'Nowy obserwujący',
        'text' => ':user zaczął Cię obserwować!'
    ],
    'comment' => [
        'new' => [
            'title' => ':model komentarz',
            'text' => ':user dodał komenatrz do :model'
        ],
        'reply' => [
            'title' => 'Odpowiedz na komentarz do :model',
            'text' => ':user odpowiedział na komentarz :model'
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'Otrzymano polubienie',
            'text' => ':user polubił Twój post!',
        ],
        'mention' => [
            'title' => 'Nowa wzmianka',
            'text' => ':user wspomiał o Tobie w swoim poście!'
        ]
    ],
    'level' => [
        'up' => [
            'title' => 'Nowy poziom!',
            'text' => 'Gratulacje osiągnięcia poziomu :level!'
        ]
    ],
    'report' => [
        'created' => [
            'title' => 'Otrzymaliśmy Twoje zgłoszenie! (Sprawa :id)',
            'text' => 'Nasz zespół zajmie się tym niezwłocznie. Dziękujemy za bycie niesamowitym i pomoc w utrzymaniu dobrej atmosfery! '
        ],
        'resolved' => [
            'title' => 'Sprawdziliśmy Twoje zgłoszenie! (Sprawa :id)',
            'text' => 'Cześć, zgłoszony problem został przyjęty i jest teraz w trakcie. Dziękujemy za bycie superbohaterem naszej społeczności!',
        ],
        'dismissed' => [
            'title' => 'Aktualizacja twojego zgłoszenia (Sprawa :id)',
            'text' => 'Po przeanalizowaniu zgłoszenia, treść którą zgłosiłeś, nie jest sprzeczna z naszymi wytycznymi. Jeśli chcesz, abyśmy przejrzeli coś konkretnego, upewnij się, że zgłosisz skórkę, profil itp., i podaj dodatkowy kontekst w razie potrzeby. Dziękujemy za troskę i zaangażowanie w naszą społeczność!',
        ]
    ]
];
