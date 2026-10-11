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
        'text' => ':user is now following you.',
    ],
    'comment' => [
        'new' => [
            'title' => ':model comentar',
            'text' => ':user commented on your :model.',
        ],
        'reply' => [
            'title' => 'Reply to a :model comment',
            'text' => ':user replied to a :model comment.',
        ],
        'mention' => [
            'title' => 'Nueva mención',
            'text' => ':user mentioned you in a comment.',
        ],
        'like' => [
            'title' => 'Has dado un me gusta al comentario',
            'text' => ':user liked your comment.',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Post liked',
            'text' => ':user liked your post.',
        ],
        'mention' => [
            'title' => 'Nueva mención',
            'text' => ':user mentioned you in their post.',
        ],
        'repost' => [
            'title' => 'Republicar',
            'text' => ':user reposted your post.',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'Nuevo mensaje',
            'text' => ':user te envió un mensaje.',
        ],
        'group_invitation' => [
            'title' => 'Group chat invitation',
            'text' => ':user invited you to join the group chat ":group".',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'You levelled up!',
            'text' => '¡Felicidades por alcanzar el nivel :level!',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'Agregado a un tablero',
            'text' => ':user te agregó como colaborador al tablero ":board".',
        ],
    ],
    'skin_editor' => [
        'project_invitation' => [
            'title' => 'Skin project invitation',
            'text' => ':user invited you to edit ":project". Open the invitation to join.',
        ],
    ],
    'report' => [
        'created' => [
            'title' => 'Report received (case :id)',
            'text' => 'Your report has been sent to our moderation team for review.',
        ],
        'resolved' => [
            'title' => 'Report reviewed (case :id)',
            'text' => 'Our moderation team has completed its review and closed your report.',
        ],
        'dismissed' => [
            'title' => 'Report dismissed (case :id)',
            'text' => 'Our moderation team reviewed your report and took no action. If something was missed, report the specific content and include details to help us review it.',
        ],
    ],
    'system' => [
        'discord_invite' => [
            'title' => 'Join the SkinMC Discord',
            'text' => 'Meet other Minecraft players in the SkinMC Discord server.',
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
            'text' => 'Your listing needs at least :minimum photos to be published. Photos still needed: :remaining.',
        ],
        'reminder_no_images' => [
            'title' => 'El anuncio de tu servidor aún no tiene fotos',
            'text' => 'Add photos to complete your server listing.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Su anuncio todavía está pendiente de revisión',
            'text' => 'Your listing is awaiting moderation. Check that its details and photos are up to date.',
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
