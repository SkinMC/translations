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
        'title' => 'Nouvel abonné',
        'text' => '',
    ],
    'comment' => [
        'new' => [
            'title' => ':model commentaire',
            'text' => '',
        ],
        'reply' => [
            'title' => '',
            'text' => '',
        ],
        'mention' => [
            'title' => 'Nouvelle mention',
            'text' => '',
        ],
        'like' => [
            'title' => 'Commentaire aimé',
            'text' => '',
        ],
    ],
    'post' => [
        'like' => [
            'title' => '',
            'text' => '',
        ],
        'mention' => [
            'title' => 'Nouvelle mention',
            'text' => '',
        ],
        'repost' => [
            'title' => 'Reposter',
            'text' => '',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'Nouveau message',
            'text' => ':user vous a envoyé un message.',
        ],
        'group_invitation' => [
            'title' => '',
            'text' => '',
        ],
    ],
    'level' => [
        'up' => [
            'title' => '',
            'text' => 'Félicitations pour avoir atteint le niveau :level !',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'Ajouté au tableau',
            'text' => ':user vous a ajouté en tant que collaborateur au tableau ":board".',
        ],
    ],
    'skin_editor' => [
        'project_invitation' => [
            'title' => '',
            'text' => '',
        ],
    ],
    'report' => [
        'created' => [
            'title' => '',
            'text' => '',
        ],
        'resolved' => [
            'title' => '',
            'text' => '',
        ],
        'dismissed' => [
            'title' => '',
            'text' => '',
        ],
    ],
    'system' => [
        'discord_invite' => [
            'title' => '',
            'text' => '',
        ],
    ],
    'server' => [
        'review_received' => [
            'title' => 'Nouvel avis sur :server',
            'text' => 'Votre annonce ":server" a reçu un nouvel avis (:rating/5).',
        ],
        'low_rating' => [
            'title' => 'Notation abandonnée pour le :server',
            'text' => 'Votre note moyenne est maintenant de :rating/5 pour :reviews retours. Pensez à revoir vos commentaires dans Insights.',
        ],
        'vote_milestone' => [
            'title' => 'Étape de vote atteinte',
            'text' => ':server a atteint :votes au cours des 30 derniers jours.',
        ],
        'approved' => [
            'title' => ':server a été approuvé',
            'text' => 'Votre annonce a été approuvée et est maintenant éligible pour être publiée une fois que toutes les conditions seront remplies.',
        ],
        'unapproved' => [
            'title' => ':server nécessite des mises à jour',
            'text' => 'Votre annonce a été retirée du statut approuvé. Vérifiez les détails de votre annonce et mettez à jour si nécessaire.',
        ],
        'published' => [
            'title' => ':server est maintenant en ligne',
            'text' => 'Votre serveur est publié et visible sur la liste des serveurs.',
        ],
        'unpublished' => [
            'title' => ':server a été dépublié',
            'text' => 'Votre serveur n\'est plus visible publiquement. Examinez son état dans votre tableau de bord.',
        ],
        'verified' => [
            'title' => ':server est maintenant vérifié',
            'text' => 'Votre annonce a reçu un badge de vérification.',
        ],
        'photo_requirement_complete' => [
            'title' => 'Exigence de photo terminée pour :server',
            'published_text' => 'Vous avez maintenant au moins 5 images et votre annonce est à nouveau en ligne.',
            'pending_text' => 'Vous avez maintenant au moins 5 images. Votre annonce est prête à être vérifiée.',
        ],
        'photo_requirement_missing' => [
            'title' => 'Ajouter plus de photos à :server',
            'text' => '',
        ],
        'reminder_no_images' => [
            'title' => 'Votre serveur n\'a toujours pas de photos',
            'text' => '',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Votre annonce est toujours en attente de révision',
            'text' => '',
        ],
    ],
    'wallpaper' => [
        'challenge_winner' => [
            'title' => 'Vainqueur du défi "fond d\'écran"',
            'text' => 'Votre fond d\'écran ":title" a été sélectionné comme gagnant pour :month.',
        ],
    ],
    'streak' => [
        'at_risk' => [
            'title' => 'Série de :days jours à risque',
            'text_send_now' => 'Envoyez un message avant minuit UTC pour garder votre série en vie.',
            'text_waiting_other' => 'Vous avez répondu aujourd\'hui. Vous avez encore besoin d\'une réponse avant minuit UTC.',
        ],
    ],
];
