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
        'text' => ':user vous suit maintenant !',
    ],
    'comment' => [
        'new' => [
            'title' => ':model commentaire',
            'text' => ':user a commenté votre :model',
        ],
        'reply' => [
            'title' => 'Répondre au commentaire :model',
            'text' => ':user a répondu à un commentaire de :model',
        ],
        'mention' => [
            'title' => 'Nouvelle mention',
            'text' => ':user vous a mentionné dans un commentaire !',
        ],
        'like' => [
            'title' => 'Commentaire aimé',
            'text' => ':user a aimé votre post !',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'J\'aime reçu',
            'text' => ':user a aimé votre publication !',
        ],
        'mention' => [
            'title' => 'Nouvelle mention',
            'text' => ':user vous a mentionné dans sa publication !',
        ],
        'repost' => [
            'title' => 'Reposter',
            'text' => ':user a reposté votre post !',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'Nouveau message',
            'text' => ':user vous a envoyé un message.',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Vous êtes passé au niveau supérieur !',
            'text' => 'Félicitations pour avoir atteint le niveau :level !',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'Ajouté au tableau',
            'text' => ':user vous a ajouté en tant que collaborateur au tableau ":board".',
        ],
    ],
    'report' => [
        'created' => [
            'title' => 'Nous avons reçu votre signalement (Case :id)',
            'text' => 'Notre équipe est là et examinera tout de suite. Merci d\'être génial et de nous aider à garder les choses frissonnantes ! ',
        ],
        'resolved' => [
            'title' => 'Nous avons examiné votre signalement (Case :id)',
            'text' => 'Bonjour, le problème signalé a été traité et est maintenant réglé. Merci d\'être un super-héro de notre communauté !',
        ],
        'dismissed' => [
            'title' => 'Mise à jour de votre signalement (Case :id)',
            'text' => 'Après un travail de détection, nous avons découvert que le contenu que vous avez signalé ne va pas à l\'encontre de nos lignes directrices. Si vous voulez que nous examinions quelque chose de spécifique, assurez-vous de signaler le skin, le profil, etc, et de fournir un contexte supplémentaire lorsque nécessaire. Merci pour votre préoccupation et votre implication dans notre communauté!',
        ],
    ],
    'system' => [
        'discord_invite' => [
            'title' => 'Rejoignez le Discord',
            'text' => 'Salut, tu es invité à rejoindre le serveur Discord SkinMC.',
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
            'text' => 'Votre annonce a besoin de :remaining photo(s) de plus pour atteindre le minimum de :minimum et rester publiable.',
        ],
        'reminder_no_images' => [
            'title' => 'Votre serveur n\'a toujours pas de photos',
            'text' => 'Ajoutez au moins 5 photos pour améliorer la crédibilité de votre serveur et rendre votre annonce publique.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Votre annonce est toujours en attente de révision',
            'text' => 'Votre annonce est en attente depuis un certain temps. Vérifier les détails et les photos pour aider la revue de votre serveur.',
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
