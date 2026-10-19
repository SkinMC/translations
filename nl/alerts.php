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
        'title' => 'Nieuwe volger',
        'text' => '',
    ],
    'comment' => [
        'new' => [
            'title' => ':model comment',
            'text' => '',
        ],
        'reply' => [
            'title' => '',
            'text' => '',
        ],
        'mention' => [
            'title' => 'Nieuwe vermelding',
            'text' => '',
        ],
        'like' => [
            'title' => 'Reactie geliked',
            'text' => '',
        ],
    ],
    'post' => [
        'like' => [
            'title' => '',
            'text' => '',
        ],
        'mention' => [
            'title' => 'Nieuwe vermelding',
            'text' => '',
        ],
        'repost' => [
            'title' => 'Herplaats',
            'text' => '',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'Nieuw bericht',
            'text' => ':user heeft je een bericht gestuurd',
        ],
        'group_invitation' => [
            'title' => '',
            'text' => '',
        ],
    ],
    'level' => [
        'up' => [
            'title' => '',
            'text' => 'Gefeliciteerd met het bereiken van level :level!',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'toegevoegd aan een board',
            'text' => ':user heeft je als partner toegevoegd aan het board ":board".',
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
            'title' => 'Nieuwe review op :server',
            'text' => 'Je weergegeven server ":server" heeft een review gekregen (:rating/5)',
        ],
        'low_rating' => [
            'title' => 'rating gedaald voor :server',
            'text' => 'De gemiddelde rating is nu :rating/5 over :reviews reviews.',
        ],
        'vote_milestone' => [
            'title' => 'Vote mijlpaal bereikt',
            'text' => ':server heeft :votes votes bereikt in de laatste 30 dagen',
        ],
        'approved' => [
            'title' => ':server is geaccepteerd',
            'text' => 'Je listing is herzien en kan worden gepubliceerd zodra aan alle vereisten is voldaan.',
        ],
        'unapproved' => [
            'title' => ':server heeft updates nodig',
            'text' => 'Je listing is uit de goedgekeurde status gehaald. Controleer de aanvraag gegevens en werk indien nodig bij.',
        ],
        'published' => [
            'title' => ':server is nu online',
            'text' => 'Je listing is gepubliceerd en is nu te zien op de server lijst',
        ],
        'unpublished' => [
            'title' => 'Publicatie voor :server is ongedaan gemaakt',
            'text' => 'Je listing is niet meer publiekelijk zichtbaar. Controleer je aanvraag status in het Dashboard',
        ],
        'verified' => [
            'title' => ':server is nu geverifieerd',
            'text' => 'Je listing heeft een verificatie badge gekregen.',
        ],
        'photo_requirement_complete' => [
            'title' => 'vereiste foto\'s voltooid voor :server',
            'published_text' => 'Je hebt nu minimaal 5 afbeeldingen en je listing is opnieuw gepubliceerd',
            'pending_text' => 'Je hebt nu minimaal 5 afbeeldingen. Je listing is nu klaar voor moderatie',
        ],
        'photo_requirement_missing' => [
            'title' => 'Voeg meer foto\'s toe aan :server',
            'text' => '',
        ],
        'reminder_no_images' => [
            'title' => 'Je server listing heeft nog steeds geen foto\'s',
            'text' => '',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Je aanvraag wacht nog steeds op review',
            'text' => '',
        ],
    ],
    'wallpaper' => [
        'challenge_winner' => [
            'title' => 'Achtergrond Challenge winnaar',
            'text' => 'Je achtergrond ":title" is geselecteerd als winnaar voor :maand',
        ],
    ],
    'streak' => [
        'at_risk' => [
            'title' => 'je :days-dagen streak is in gevaar',
            'text_send_now' => 'Stuur een bericht vóór middernacht UTC om je streak levend te houden',
            'text_waiting_other' => 'Je reageerde vandaag. Je moet een reactie terugkrijgen vóór middernacht UTC',
        ],
    ],
];
