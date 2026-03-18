<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Dashboard Lines
    |--------------------------------------------------------------------------
    |
    |
    */
    'dashboard' => [
        'title' => 'Tableau de bord',
        'total-members' => 'Total des membres',
        'claimed-profiles' => 'Profils réclamés',
        'profiles' => 'Profils',
        'skins' => 'Skins',
        'users' => 'Utilisateur',
        'last-30-days' => '30 derniers jours',
        'members' => 'Membres',
        'usernames' => 'Pseudos',
    ],
    'help' => [
        'title' => 'Aide',
        'subtitle' => 'Astuces utiles pour le tableau de bord SkinMC',
    ],
    'users' => [
        'title' => 'Utilisateurs',
        'subtitle' => ':count nombre total d\'utilisateurs inscrits',
        'list' => [
            'username' => 'Pseudo',
            'email' => 'Email',
            'status' => 'Status',
            'role' => 'Rôle'
        ],
    ],
    'skins' => [
        'title' => 'Skins',
    ],
    'tags' => [
        'title' => 'Étiquettes',
        'pending' => 'Étiquettes en attente',
        'banned' => 'Tag Banni',
    ],
    'reports' => [
        'title' => 'Signaler',
    ],
    'feed' => [
        'title' => 'Publications du flux',
        'subtitle' => ':count total de publications créées',
    ],
    'wallpapers' => [
        'title' => 'Fonds d\'écrans',
        'challenge' => [
            'title' => 'Défi de fond d\'écran',
            'description' => 'Sélectionnez le gagnant pour :challenge_month. Le fond d\'écran sélectionné sera affiché sur la page d\'accueil dans :display_month.',
            'back_to_moderation' => 'Retour à la modération',
            'month_label' => 'Mois du défi',
            'previous_month' => 'Mois précédent',
            'next_month' => 'Mois prochain',
            'shortlisted' => ':count présélection',
            'winner_selected' => 'Gagnant sélectionné',
            'no_winner_selected' => 'Aucun gagnant sélectionné',
            'selected_winner' => 'Gagnant sélectionné',
            'displays_on_home' => 'Affiche sur l\'écran d\'accueil dans :month',
            'open_wallpaper' => 'Ouvrir le fond d\'écran',
            'clear_reason_placeholder' => 'Raison de l\'effacement (optionnel)',
            'clear_confirm' => 'Effacer le gagnant pour :month?',
            'clear_winner' => 'Effacer le gagnant',
            'winner_unavailable' => 'Le fond d\'écran sélectionné n\'est pas disponible.',
            'display_month' => 'Afficher le mois : :month',
            'choose_from_shortlist' => 'Choisissez un fond d\'écran dans la liste ci-dessous.',
            'recent_changes' => 'Nouveautés',
            'action_replaced' => 'Gagnant remplacé',
            'action_set' => 'Définir le gagnant',
            'action_cleared' => 'Effacer le gagnant',
            'log_actor' => 'par :name',
            'log_none' => 'Aucun',
            'log_empty' => 'Aucun changement de gagnant enregistré pour ce mois-ci.',
            'table_rank' => '#',
            'table_wallpaper' => 'Fond d\'écran',
            'table_creator' => 'Créateur',
            'table_stats' => 'Statistiques',
            'table_action' => 'Action',
            'stats_views' => ':count vues',
            'stats_downloads' => ':count téléchargements',
            'stats_favourites' => ':count favoris',
            'reason_placeholder' => 'Raison (facultative)',
            'set_winner' => 'Définir le gagnant',
            'selected' => 'Sélectionné',
            'no_entries' => 'Aucune participation au challenge admissible pour :month.',
            'unknown_creator' => 'Créateur inconnu',
            'unknown_user' => 'Inconnu(e)',
            'system_user' => 'Système',
            'flash_saved' => 'Gagnant du défi enregistré.',
            'flash_cleared' => 'Vainqueur du défi supprimé.',
            'flash_none_to_clear' => 'Aucun gagnant n\'a été fixé pour ce mois-ci.',
        ],
    ],
    'comments' => [
        'title' => 'Commentaire',
        'subtitle' => ':count total de commentaires postés',
        'deleted' => [
            'title' => 'Commentaire supprimer',
            'subtitle' => ':count total de commentaires supprimés',
        ]
    ]
];
