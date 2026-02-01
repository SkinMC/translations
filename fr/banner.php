<?php

return [
    'colors' => [
        'black' => 'sable',
        'red' => 'gueules',
        'green' => 'sinople',
        'brown' => 'tanné',
        'blue' => 'azur',
        'purple' => 'mûre',
        'cyan' => 'cyan',
        'gray' => 'acier',
        'dark_gray' => 'acier',
        'pink' => 'carnation',
        'lime' => 'sinople clair',
        'yellow' => 'or',
        'light_blue' => 'bleu céleste',
        'magenta' => 'pourpre',
        'orange' => 'orangé',
        'white' => 'argent',
    ],

    'patterns' => [
        // Base (solid background) – game: "Fully :color Field"
        'base' => 'Champ entier :color',

        // Stripes
        'bs' => 'Champagne',           // stripe_bottom
        'ts' => 'Chef',         // stripe_top
        'ls' => 'Pal à dextre',   // stripe_left
        'rs' => 'Pal à sénestre', // stripe_right
        'cs' => 'Pal',          // stripe_center
        'ms' => 'Fasce',          // stripe_middle
        'drs' => 'Bande',         // stripe_downright
        'dls' => 'Barre à sénestre', // stripe_downleft
        'ss' => 'Pals',          // small_stripes

        // Crosses
        'cr' => 'Sautoir',
        'sc' => 'Croix',       // straight_cross

        // Diagonals
        'ld' => 'Taillé',       // diagonal_left
        'rd' => 'Bande',                // diagonal_up_right (stripe_downright diagonal)
        'lud' => 'Tranché (inverté)',      // diagonal_up_left
        'rud' => 'Taillé (inverté)', // diagonal_right

        // Halves
        'vh' => 'Parti',              // half_vertical
        'vhr' => 'Parti (inverté)',   // half_vertical_right
        'hh' => 'Coupé',              // half_horizontal
        'hhb' => 'Coupé (inverté)',   // half_horizontal_bottom

        // Squares (cantons)
        'bl' => 'Canton en pointe à dextre',    // square_bottom_left
        'br' => 'Canton en pointe à sénestre', // square_bottom_right
        'tl' => 'Canton en chef à dextre',  // square_top_left
        'tr' => 'Canton en chef à sénestre', // square_top_right

        // Triangles
        'bt' => 'Mantelé',           // triangle_bottom
        'tt' => 'Mantelé renversé',  // triangle_top
        'bts' => 'Émanchures en pointe',   // triangles_bottom
        'tts' => 'Émanchures en chef',  // triangles_top

        // Shapes
        'mc' => 'Tourteau',   // circle
        'mr' => 'Losange',   // rhombus

        // Borders
        'bo' => 'Bordure',           // border
        'cbo' => 'Bordure cannelée', // curly_border
        'bri' => 'Champ maçonné',    // bricks

        // Gradients
        'gra' => 'Dégradé',     // gradient
        'gru' => 'Dégradé en pointe', // gradient_up

        // Charges (creatures / objects)
        'cre' => 'Face de Creeper', // creeper
        'sku' => 'Crâne',   // skull
        'flo' => 'Fleur', // flower
        'moj' => 'Symbole',         // mojang
        'glb' => 'Globe',         // globe
        'pig' => 'Groin',         // piglin
        'flow' => 'Tourbillon',
        'guster' => 'Rafaleur',
    ],
];
