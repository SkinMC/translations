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
        'text' => ':user volgt je nu!',
    ],
    'comment' => [
        'new' => [
            'title' => ':model comment',
            'text' => ':user Heeft een comment geplaatst op je :model',
        ],
        'reply' => [
            'title' => 'Reageer op :model comment',
            'text' => ':user antwoordde op een :model comment',
        ],
        'mention' => [
            'title' => 'Nieuwe vermelding',
            'text' => ':user heeft je genoemd in een reactie!',
        ],
        'like' => [
            'title' => 'Reactie geliked',
            'text' => ':user heeft je comment geliked',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Like gekregen',
            'text' => ':user heeft je post geliked!',
        ],
        'mention' => [
            'title' => 'Nieuwe vermelding',
            'text' => ':user noemde je in zijn/haar bericht!',
        ],
        'repost' => [
            'title' => 'Herplaats',
            'text' => ':user heeft je post herplaatst!',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'Nieuw bericht',
            'text' => ':user heeft je een bericht gestuurd',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Je bent een level omhoog gegaan!',
            'text' => 'Gefeliciteerd met het bereiken van level :level!',
        ],
    ],
    'board' => [
        'collaborator_added' => [
            'title' => 'toegevoegd aan een board',
            'text' => ':user heeft je als partner toegevoegd aan het board ":board".',
        ],
    ],
    'report' => [
        'created' => [
            'title' => 'We hebben uw rapport ontvangen! (Zaak :id)',
            'text' => 'Ons team is ermee bezig en zal er direct naar kijken. Thx voor geweldig zijn en ons helpen!',
        ],
        'resolved' => [
            'title' => 'We hebben uw rapport beoordeeld (Zaak :id)',
            'text' => 'Het gerapporteerde probleem is geregeld en is nu opgelost. Bedankt met een superheld van onze community te zijn!',
        ],
        'dismissed' => [
            'title' => 'Update van uw gerapporteerde probleem (Zaak :id)',
            'text' => 'Na wat detective werk hebben we ontdekt dat de inhoud die je had gerapporteerd niet in strijd is met onze richtlijnen. Als je wilt dat we iets specifieks bekijken, zorg er dan voor dat u de skin, profiel, etc. rapporteert en aanvullende context geeft wanneer dat nodig is. Bedankt voor uw zorgen en betrokkenheid bij onze community!',
        ],
    ],
    'system' => [
        'discord_invite' => [
            'title' => 'Join de Discord',
            'text' => 'Hey daar, je bent uitgenodigd om de SkinMC Discord server te joinen',
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
            'text' => 'Je listing heeft nog :remaining foto(s) nodig om het minimum van :minimum te bereiken en online te blijven',
        ],
        'reminder_no_images' => [
            'title' => 'Je server listing heeft nog steeds geen foto\'s',
            'text' => 'Voeg op zijn minst 5 foto\'s toe om vertrouwen te vergroten en je aanvraag naar publicatie',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Je aanvraag wacht nog steeds op review',
            'text' => 'Je listing is al een tijdje in de wacht. Controleer de foto\'s nog een keer om de beoordeling soepel te laten verlopen.',
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
