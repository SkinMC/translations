<?php

return [
    'colors' => [
        'black' => 'Zwart',
        'red' => 'Rood',
        'green' => 'Groen',
        'brown' => 'Bruin',
        'blue' => 'Blauw',
        'purple' => 'Paars',
        'cyan' => 'Cyaan',
        'gray' => 'Grijs',
        'dark_gray' => 'Donker Grijs',
        'pink' => 'Roze',
        'lime' => 'Licht Groen',
        'yellow' => 'Geel',
        'light_blue' => 'Licht Blauw',
        'magenta' => 'Magenta',
        'orange' => 'Oranje',
        'white' => 'Wit',
    ],

    'patterns' => [
        // Base (solid background) – game: "Fully :color Field"
        'base' => 'Volledig :color Veld',

        // Stripes
        'bs' => 'Schildvoet',           // stripe_bottom
        'ts' => 'Schildhoofd',         // stripe_top
        'ls' => 'Rechterpaal',   // stripe_left
        'rs' => 'Linkerpaal', // stripe_right
        'cs' => 'Paal',          // stripe_center
        'ms' => 'Dwarsbalk',          // stripe_middle
        'drs' => 'Rechterschuinbalk',         // stripe_downright
        'dls' => 'Linkerschuinbalk', // stripe_downleft
        'ss' => 'Palem',          // small_stripes

        // Crosses
        'cr' => 'Kruis',
        'sc' => 'Andreaskruis',       // straight_cross

        // Diagonals
        'ld' => 'Schuinlinks verdeeld',       // diagonal_left
        'rd' => 'Schuinrechts verdeeld',                // diagonal_up_right (stripe_downright diagonal)
        'lud' => 'Omgekeerd schuinrechts verdeeld',      // diagonal_up_left
        'rud' => 'Omgekeerd Schuinlinks Verdeeld', // diagonal_right

        // Halves
        'vh' => 'Gepaald',              // half_vertical
        'vhr' => 'Omgekeerd Gepaald',   // half_vertical_right
        'hh' => 'Gebalkt',              // half_horizontal
        'hhb' => 'Omgekeerd Gebalkt',   // half_horizontal_bottom

        // Squares (cantons)
        'bl' => 'Kwartier Rechtsonder',    // square_bottom_left
        'br' => 'Kwartier Linksonder', // square_bottom_right
        'tl' => 'Kwartier Rechtsboven',  // square_top_left
        'tr' => 'Kwartier Linksboven', // square_top_right

        // Triangles
        'bt' => 'Keper',           // triangle_bottom
        'tt' => 'Omgekeerde Keper',  // triangle_top
        'bts' => 'Gegolfd Schildvoet',   // triangles_bottom
        'tts' => 'Gegolfd Schildhoofd',  // triangles_top

        // Shapes
        'mc' => 'Blauwe koek',   // circle
        'mr' => 'Lozanje',   // rhombus

        // Borders
        'bo' => 'Zoom',           // border
        'cbo' => 'Ingesprongen Zoom', // curly_border
        'bri' => 'Metselwerk',    // bricks

        // Gradients
        'gra' => 'Gradiënt',     // gradient
        'gru' => 'Schildvoet Gradiënt', // gradient_up

        // Charges (creatures / objects)
        'cre' => 'Creeperwapen', // creeper
        'sku' => 'Schedelwapen',   // skull
        'flo' => 'Bloemwapen', // flower
        'moj' => 'Mojang logo',         // mojang
        'glb' => 'Globe',         // globe
        'pig' => 'Snoet',         // piglin
        'flow' => 'Windstroming',
        'guster' => 'Rukwind',
    ],
];
