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
        'text' => '¡:user te sigue!',
    ],
    'comment' => [
        'new' => [
            'title' => ':model comentar',
            'text' => ':user hizo un comentario en tu :model',
        ],
        'reply' => [
            'title' => 'Responder a :model comentario',
            'text' => ':user respondió a un comentario :model',
        ],
        'mention' => [
            'title' => 'Nueva mención',
            'text' => '¡:user te mencionó en su publicación!',
        ],
        'like' => [
            'title' => 'Has dado un me gusta al comentario',
            'text' => '¡A :user le gustó tu publicación!',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Me gusta recibido',
            'text' => '¡A :user le gustó tu publicación!',
        ],
        'mention' => [
            'title' => 'Nueva mención',
            'text' => '¡:user te mencionó en su publicación!',
        ],
        'repost' => [
            'title' => 'Republicar',
            'text' => '¡A :user le gustó tu publicación!',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'Nuevo mensaje',
            'text' => ':user te envió un mensaje.',
        ],
    ],
    'level' => [
        'up' => [
            'title' => '¡Has subido de nivel!',
            'text' => '¡Felicidades por alcanzar el nivel :level!',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'Agregado a un tablero',
            'text' => ':user te agregó como colaborador al tablero ":board".',
        ],
    ],
    'report' => [
        'created' => [
            'title' => '¡Hemos recibido tu informe! (Caso :id)',
            'text' => 'Nuestro equipo está en él y lo estudiará de inmediato. ¡Gracias por ser increíble y ayudarnos a mantener las cosas tranquilas!',
        ],
        'resolved' => [
            'title' => 'Hemos revisado tu informe (Caso :id)',
            'text' => 'Hola, el problema reportado ha sido tratado y ahora está arreglado. ¡Gracias por ser un superhéroe de nuestra comunidad!',
        ],
        'dismissed' => [
            'title' => 'Hemos revisado tu informe (Caso :id)',
            'text' => 'Después de un trabajo de detective, hemos encontrado que el contenido que usted había reportado no va en contra de nuestras directrices. Si desea que revisemos algo específico, por favor asegúrese de que reporta la skin, el perfil, etc, y proporcione un contexto adicional cuando sea necesario. ¡Gracias por su preocupación y participación en nuestra comunidad!',
        ],
    ],
    'system' => [
        'discord_invite' => [
            'title' => 'Únete al Discord',
            'text' => 'Hola, estás invitado a unirte al servidor Discord de SkinMC.',
        ],
    ],
    'server' => [
        'review_received' => [
            'title' => 'Nueva reseña en :server',
            'text' => 'Tu anuncio de ":server", ha recibió una nueva reseña (:rating/5).',
        ],
        'low_rating' => [
            'title' => 'Valoración descartada para :server',
            'text' => 'Tu calificación media es ahora :rating/5 a través de :reviews reseñas. Considera revisar las reseñas en detalles.',
        ],
        'vote_milestone' => [
            'title' => 'Hito de voto alcanzado',
            'text' => ':server alcanzó :votes en los últimos 30 días.',
        ],
        'approved' => [
            'title' => ':server ha sido aprobado',
            'text' => 'Su anuncio ha pasado la revisión y ahora es elegible para estar en línea una vez que se cumplan todos los requisitos.',
        ],
        'unapproved' => [
            'title' => ':server necesita actualizaciones',
            'text' => 'Tu anuncio de servidor fue retirado del estado aprobado. Revisa los detalles de tu anuncio y actualiza según sea necesario.',
        ],
        'published' => [
            'title' => ':server ahora está en línea',
            'text' => 'Tu anuncio de servidor está publicado y visible en la lista de servidores.',
        ],
        'unpublished' => [
            'title' => ':server ha sido despublicado',
            'text' => 'Su anuncio de servidor ya no es visible públicamente. Revise el estado del anuncio en su panel de control.',
        ],
        'verified' => [
            'title' => ':server está ahora verificado',
            'text' => 'Tu anuncio de servidor recibió una insignia de verificación.',
        ],
        'photo_requirement_complete' => [
            'title' => 'Requisito de foto completo para :server',
            'published_text' => 'Ahora tienes al menos 5 imágenes y tu anuncio está en línea de nuevo.',
            'pending_text' => 'Ahora tienes al menos 5 imágenes. Tu anuncio está listo para ser moderado.',
        ],
        'photo_requirement_missing' => [
            'title' => 'Añadir más fotos a :server',
            'text' => 'Su anuncio necesita :remaining foto(s) más para alcanzar el mínimo :minimum y permanezca publicable.',
        ],
        'reminder_no_images' => [
            'title' => 'El anuncio de tu servidor aún no tiene fotos',
            'text' => 'Añade al menos 5 fotos para mejorar la confianza y mover tu anuncio hacia la publicación.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Su anuncio todavía está pendiente de revisión',
            'text' => 'Tu anuncio ha estado pendiente durante un tiempo. Revisa dos veces los detalles y las fotos para ayudar a mantener la revisión sin problemas.',
        ],
    ],
    'wallpaper' => [
        'challenge_winner' => [
            'title' => 'Desafío de fondo de pantalla',
            'text' => 'Tu fondo de pantalla ":título" fue seleccionado como el ganador durante :month.',
        ],
    ],
    'streak' => [
        'at_risk' => [
            'title' => ':days-day racha en riesgo',
            'text_send_now' => 'Envía un mensaje antes de medianoche UTC para mantener tu racha viva.',
            'text_waiting_other' => 'Has respondido hoy. Aún necesitas una respuesta antes de la medianoche UTC.',
        ],
    ],
];
