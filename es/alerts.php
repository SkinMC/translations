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
        'title' => 'Nuevo seguidor',
        'text' => '¡:user te sigue!'
    ],
    'comment' => [
        'new' => [
            'title' => ':model comment',
            'text' => ':user hizo un comentario en tu :model'
        ],
        'reply' => [
            'title' => 'Reply on :model comment',
            'text' => ':user replied to a :model comment'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'Me gusta recibido',
            'text' => '¡A :user le gustó tu publicación!',
        ],
        'mention' => [
            'title' => 'Nueva mención',
            'text' => '¡:user te mencionó en su publicación!'
        ]
    ],
    'level' => [
        'up' => [
            'title' => '¡Has subido de nivel!',
            'text' => '¡Felicidades por alcanzar el nivel :level!'
        ]
    ],
    'report' => [
        'created' => [
            'title' => '¡Hemos recibido tu informe! (Caso :id)',
            'text' => 'Nuestro equipo está en él y lo estudiará de inmediato. ¡Gracias por ser increíble y ayudarnos a mantener las cosas tranquilas!'
        ],
        'resolved' => [
            'title' => 'Hemos revisado tu informe (Caso :id)',
            'text' => 'Hola, el problema reportado ha sido tratado y ahora está arreglado. ¡Gracias por ser un superhéroe de nuestra comunidad!',
        ],
        'dismissed' => [
            'title' => 'Update to your report (Case :id)',
            'text' => 'Después de un trabajo de detective, hemos encontrado que el contenido que usted había reportado no va en contra de nuestras directrices. Si desea que revisemos algo específico, por favor asegúrese de que reporta la skin, el perfil, etc, y proporcione un contexto adicional cuando sea necesario. ¡Gracias por su preocupación y participación en nuestra comunidad!',
        ]
    ]
];
