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
        'title' => 'Novo seguidor',
        'text' => ':user seguiu você!',
    ],
    'comment' => [
        'new' => [
            'title' => ':model comentário',
            'text' => ':user comentou em seu :model',
        ],
        'reply' => [
            'title' => 'Responder ao comentário no :model',
            'text' => ':user respondeu a um comentário em :model',
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
            'title' => 'Curtida recebida',
            'text' => ':user curtiu sua publicação!',
        ],
        'mention' => [
            'title' => 'Nova menção',
            'text' => ':user mencionou você em uma publicação!',
        ],
        'repost' => [
            'title' => 'Repost',
            'text' => ':user reposted your post!',
        ],
    ],
    'level' => [
        'up' => [
            'title' => 'Você subiu de nível!',
            'text' => 'Parabéns por alcançar o nível :level!',
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
            'title' => 'Recebemos seu relatório! (Caso :id)',
            'text' => 'Nossa equipe está trabalhando em seu problema. Obrigada por ser gentil e ajudar-nos a manter as coisas calmas! ',
        ],
        'resolved' => [
            'title' => 'Nós revisamos seu relatório (Caso :id)',
            'text' => 'Olá, o problema informado já foi resolvido e ordenado. Obrigada por ser um super-herói da nossa comunidade!',
        ],
        'dismissed' => [
            'title' => 'Atualização para seu relatório (Case :id)',
            'text' => 'Depois de uma investigação, nós vimos que o conteúdo informado por você não viola nossas diretrizes. Se você quiser a revisão de algo específico, por favor, certifique-se de que a(o) skin, perfil, etc. forneça contexto adicional quando preciso. Obrigada pela preocupação e o envolvimento em nossa comunidade!',
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
