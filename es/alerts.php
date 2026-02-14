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
            'title' => ':model comment',
            'text' => ':user hizo un comentario en tu :model',
        ],
        'reply' => [
            'title' => 'Reply on :model comment',
            'text' => ':user replied to a :model comment',
        ],
        'mention' => [
            'title' => 'New mention',
            'text' => ':user mentioned you in a comment!',
        ],
        'like' => [
            'title' => 'Comment liked',
            'text' => ':user liked your comment!',
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
            'title' => 'Repost',
            'text' => ':user reposted your post!',
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
            'title' => 'Added to a board',
            'text' => ':user added you as a collaborator to the board ":board".',
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
            'title' => 'Update to your report (Case :id)',
            'text' => 'Después de un trabajo de detective, hemos encontrado que el contenido que usted había reportado no va en contra de nuestras directrices. Si desea que revisemos algo específico, por favor asegúrese de que reporta la skin, el perfil, etc, y proporcione un contexto adicional cuando sea necesario. ¡Gracias por su preocupación y participación en nuestra comunidad!',
        ],
    ],
    'server' => [
        'review_received' => [
            'title' => 'New review on :server',
            'text' => 'Your listing ":server" received a new review (:rating/5).',
        ],
        'low_rating' => [
            'title' => 'Rating dropped for :server',
            'text' => 'Your average rating is now :rating/5 across :reviews reviews. Consider reviewing feedback in Insights.',
        ],
        'vote_milestone' => [
            'title' => 'Vote milestone reached',
            'text' => ':server reached :votes votes in the last 30 days.',
        ],
        'approved' => [
            'title' => ':server was approved',
            'text' => 'Your listing passed review and is now eligible to go live once all requirements are met.',
        ],
        'unapproved' => [
            'title' => ':server needs updates',
            'text' => 'Your listing was moved out of approved status. Review your listing details and update as needed.',
        ],
        'published' => [
            'title' => ':server is now live',
            'text' => 'Your listing is published and visible on the server list.',
        ],
        'unpublished' => [
            'title' => ':server was unpublished',
            'text' => 'Your listing is no longer visible publicly. Review listing status in your dashboard.',
        ],
        'verified' => [
            'title' => ':server is now verified',
            'text' => 'Your listing received a verification badge.',
        ],
        'photo_requirement_complete' => [
            'title' => 'Photo requirement complete for :server',
            'published_text' => 'You now have at least 5 images and your listing is live again.',
            'pending_text' => 'You now have at least 5 images. Your listing is ready for moderation.',
        ],
        'photo_requirement_missing' => [
            'title' => 'Add more photos to :server',
            'text' => 'Your listing needs :remaining more photo(s) to reach the minimum of :minimum and stay publishable.',
        ],
        'reminder_no_images' => [
            'title' => 'Your server listing still has no photos',
            'text' => 'Add at least 5 photos to improve trust and move your listing toward publication.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Your listing is still pending review',
            'text' => 'Your listing has been pending for a while. Double-check details and photos to help keep review smooth.',
        ],
    ],
];
