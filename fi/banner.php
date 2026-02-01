<?php

return [
    'colors' => [
        'black' => 'Musta',
        'red' => 'Punainen',
        'green' => 'Vihreä',
        'brown' => 'Ruskea',
        'blue' => 'Sininen',
        'purple' => 'Violetti',
        'cyan' => 'Turkoosi',
        'gray' => 'Harmaa',
        'dark_gray' => 'Tummanharmaa',
        'pink' => 'Vaaleanpunainen',
        'lime' => 'Limenvihreä',
        'yellow' => 'Keltainen',
        'light_blue' => 'Vaaleansininen',
        'magenta' => 'Purppura',
        'orange' => 'Oranssi',
        'white' => 'Valkoinen',
    ],

    'patterns' => [
        // Base (solid background) – game: "Fully :color Field"
        'base' => 'Täysin :color Kenttä',

        // Stripes
        'bs' => 'Pohja',           // stripe_bottom
        'ts' => 'Yläosa',         // stripe_top
        'ls' => 'Kalpea Dexter',   // stripe_left
        'rs' => 'Kalpea Sinister', // stripe_right
        'cs' => 'Kalpea',          // stripe_center
        'ms' => 'Alaosa',          // stripe_middle
        'drs' => 'Kaarre',         // stripe_downright
        'dls' => 'Kaartuva Sinister', // stripe_downleft
        'ss' => 'Paly',          // small_stripes

        // Crosses
        'cr' => 'Risti',
        'sc' => 'Saltiiri',       // straight_cross

        // Diagonals
        'ld' => 'Kaartuvaa Sinisteriä kohden',       // diagonal_left
        'rd' => 'Kaartoa kohden',                // diagonal_up_right (stripe_downright diagonal)
        'lud' => 'Kaartuvaa kääntöä kohden',      // diagonal_up_left
        'rud' => 'Kaartuvaa käänteis sinisteriä kohden', // diagonal_right

        // Halves
        'vh' => 'Kalpeaa kohden',              // half_vertical
        'vhr' => 'Kalpekaa kääntöä kohden',   // half_vertical_right
        'hh' => 'Per Fess',              // half_horizontal
        'hhb' => 'Per Fess Inverted',   // half_horizontal_bottom

        // Squares (cantons)
        'bl' => 'Base Dexter Canton',    // square_bottom_left
        'br' => 'Base Sinister Canton', // square_bottom_right
        'tl' => 'Chief Dexter Canton',  // square_top_left
        'tr' => 'Chief Sinister Canton', // square_top_right

        // Triangles
        'bt' => 'Chevron',           // triangle_bottom
        'tt' => 'Inverted Chevron',  // triangle_top
        'bts' => 'Base Indented',   // triangles_bottom
        'tts' => 'Pääasiallinen Sisennys',  // triangles_top

        // Shapes
        'mc' => 'Pyörännys',   // circle
        'mr' => 'Lozenge',   // rhombus

        // Borders
        'bo' => 'Bordure',           // border
        'cbo' => 'Bordure Indented', // curly_border
        'bri' => 'Field Masoned',    // bricks

        // Gradients
        'gra' => 'Liukuväri',     // gradient
        'gru' => 'Base Gradient', // gradient_up

        // Charges (creatures / objects)
        'cre' => 'Creeper Charge', // creeper
        'sku' => 'Skull Charge',   // skull
        'flo' => 'Flower Charge', // flower
        'moj' => 'Thing',         // mojang
        'glb' => 'Globe',         // globe
        'pig' => 'Snout',         // piglin
        'flow' => 'Flow',
        'guster' => 'Guster',
    ],
];
