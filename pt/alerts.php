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
        'title' => 'Novo seguidor',
        'text' => ':user agora está te seguindo!'
    ],
    'comment' => [
        'new' => [
            'title' => ':model comentário',
            'text' => ':user comentou no seu :model'
        ],
        'reply' => [
            'title' => 'Responder em :model comment',
            'text' => ':user respondeu a um comentário :model'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'Curtidas recebidas',
            'text' => ':user curtiu sua publicação!',
        ],
        'mention' => [
            'title' => 'Nova menção',
            'text' => ':user mencionou você em sua publicação!'
        ]
    ],
    'level' => [
        'up' => [
            'title' => 'Você subiu de nível!',
            'text' => 'Parabéns em alcançar o nível :level!'
        ]
    ],
    'report' => [
        'created' => [
            'title' => 'Recebemos sua denúncia! (Caso :id)',
            'text' => 'Nosso time esta trabalhando nisso e vai ver isso em seguida. Obrigado por ser incrível e ajudar nós mantemos as coisas calmas! '
        ],
        'resolved' => [
            'title' => 'Recebemos sua denúncia (Caso :id)',
            'text' => 'Ola, o problema denunciado já foi resolvido. Obrigado por ser um super-herói da nossa comunidade!',
        ],
        'dismissed' => [
            'title' => 'Atualização a sua denúncia (Case :id)',
            'text' => 'Depois de algum trabalho de detetive, decidimos que o conteúdo que você denunciou não viola nossas diretrizes. Se você quer que nos avaliemos algo específico, por favor denuncie a skin, perfil, etc., e inclua contexto adicional quando seja preciso. Obrigado por sua preocupação e envolvimento em nossa comunidade!',
        ]
    ]
];
