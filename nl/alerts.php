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
        'text' => ':user is now following you.',
    ],
    'comment' => [
        'new' => [
            'title' => ':model comment',
            'text' => ':user commented on your :model.',
        ],
        'reply' => [
            'title' => 'Reply to a :model comment',
            'text' => ':user replied to a :model comment.',
        ],
        'mention' => [
            'title' => 'Nieuwe vermelding',
            'text' => ':user mentioned you in a comment.',
        ],
        'like' => [
            'title' => 'Reactie geliked',
            'text' => ':user liked your comment.',
        ],
    ],
    'post' => [
        'like' => [
            'title' => 'Post liked',
            'text' => ':user liked your post.',
        ],
        'mention' => [
            'title' => 'Nieuwe vermelding',
            'text' => ':user mentioned you in their post.',
        ],
        'repost' => [
            'title' => 'Herplaats',
            'text' => ':user reposted your post.',
        ],
    ],
    'chat' => [
        'new_message' => [
            'title' => 'Nieuw bericht',
            'text' => ':user heeft je een bericht gestuurd',
        ],
        'group_invitation' => [
            'title' => 'Group chat invitation',
            'text' => ':user invited you to join the group chat ":group".',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'You levelled up!',
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
            'text' => 'Your listing needs at least :minimum photos to be published. Photos still needed: :remaining.',
        ],
        'reminder_no_images' => [
            'title' => 'Je server listing heeft nog steeds geen foto\'s',
            'text' => 'Add photos to complete your server listing.',
        ],
        'reminder_pending_too_long' => [
            'title' => 'Je aanvraag wacht nog steeds op review',
            'text' => 'Your listing is awaiting moderation. Check that its details and photos are up to date.',
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
