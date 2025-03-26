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
        'text' => ':user vous suit maintenant !'
    ],
    'comment' => [
        'new' => [
            'title' => ':model commentaire',
            'text' => ':user a commenté votre :model'
        ],
        'reply' => [
            'title' => 'Répondre au commentaire :model',
            'text' => ':user a répondu à un commentaire de :model'
        ]
    ],
    'post' => [
        'like' => [
            'title' => 'J\'aime reçu',
            'text' => ':user a aimé votre publication !',
        ],
        'mention' => [
            'title' => 'Nouvelle mention',
            'text' => ':user vous a mentionné dans sa publication !'
        ]
    ],
    'level' => [
        'up' => [
            'title' => 'Vous êtes passé au niveau supérieur !',
            'text' => 'Félicitations pour avoir atteint le niveau :level !'
        ]
    ],
    'report' => [
        'created' => [
            'title' => 'Nous avons reçu votre signalement (Case :id)',
            'text' => 'Notre équipe est là et examinera tout de suite. Merci d\'être génial et de nous aider à garder les choses frissonnantes ! '
        ],
        'resolved' => [
            'title' => 'Nous avons examiné votre signalement (Case :id)',
            'text' => 'Bonjour, le problème signalé a été traité et est maintenant réglé. Merci d\'être un super-héro de notre communauté !',
        ],
        'dismissed' => [
            'title' => 'Mise à jour de votre signalement (Case :id)',
            'text' => 'Après un travail de détection, nous avons découvert que le contenu que vous avez signalé ne va pas à l\'encontre de nos lignes directrices. Si vous voulez que nous examinions quelque chose de spécifique, assurez-vous de signaler le skin, le profil, etc, et de fournir un contexte supplémentaire lorsque nécessaire. Merci pour votre préoccupation et votre implication dans notre communauté!',
        ]
    ]
];
