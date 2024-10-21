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
        'text' => ':user agora está seguindo você!'
    ],
    'comment' => [
        'new' => [
            'title' => ':model comentário',
            'text' => ':user comentou no seu :model'
        ],
        'reply' => [
            'title' => 'Responder no comentário de :model',
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
            'title' => 'Recebemos seu relatório! (Caso :id)',
            'text' => 'Nossa equipe está trabalhando em seu problema. Obrigada por ser gentil e ajudar-nos a manter as coisas calmas! '
        ],
        'resolved' => [
            'title' => 'Nós revisamos seu relatório (Caso :id)',
            'text' => 'Olá, o problema informado já foi resolvido e ordenado. Obrigada por ser um super-herói da nossa comunidade!',
        ],
        'dismissed' => [
            'title' => 'Atualização para seu relatório (Case :id)',
            'text' => 'Depois de uma investigação, nós vimos que o conteúdo informado por você não viola nossas diretrizes. Se você quiser a revisão de algo específico, por favor, certifique-se de que a(o) skin, perfil, etc. forneça contexto adicional quando preciso. Obrigada pela preocupação e o envolvimento em nossa comunidade!',
        ]
    ]
];
