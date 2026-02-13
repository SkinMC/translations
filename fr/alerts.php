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
    'level' => [
        'up' => [
            'title' => 'Vous êtes passé au niveau supérieur !',
            'text' => 'Félicitations pour avoir atteint le niveau :level !',
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
