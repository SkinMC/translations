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
        'text' => ':user is now following you.',
    ],
    'comment' => [
        'new' => [
            'title' => ':model commentaire',
            'text' => ':user commented on your :model.',
        ],
        'reply' => [
            'title' => 'Reply to a :model comment',
            'text' => ':user replied to a :model comment.',
        ],
        'mention' => [
            'title' => 'Nouvelle mention',
            'text' => ':user mentioned you in a comment.',
        ],
        'like' => [
            'title' => 'Commentaire aimé',
            'text' => ':user liked your comment.',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Post liked',
            'text' => ':user liked your post.',
        ],
        'mention' => [
            'title' => 'Nouvelle mention',
            'text' => ':user mentioned you in their post.',
        ],
        'repost' => [
            'title' => 'Reposter',
            'text' => ':user reposted your post.',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'Nouveau message',
            'text' => ':user vous a envoyé un message.',
        ],
        'group_invitation' => [
            'title' => 'Group chat invitation',
            'text' => ':user invited you to join the group chat ":group".',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'You levelled up!',
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
            'text' => 'Your listing needs at least :minimum photos to be published. Photos still needed: :remaining.',
        ],
        'reminder_no_images' => [
            'title' => 'Votre serveur n\'a toujours pas de photos',
            'text' => 'Add photos to complete your server listing.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Votre annonce est toujours en attente de révision',
            'text' => 'Your listing is awaiting moderation. Check that its details and photos are up to date.',
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
