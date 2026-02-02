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
        'ts' => 'Pää',         // stripe_top
        'ls' => 'Kalpea Oikea',   // stripe_left
        'rs' => 'Kalpea Vasen', // stripe_right
        'cs' => 'Kalpea',          // stripe_center
        'ms' => 'Vaakaviiva',          // stripe_middle
        'drs' => 'Kaarre',         // stripe_downright
        'dls' => 'Kaartuva Vasen', // stripe_downleft
        'ss' => 'Paly',          // small_stripes

        // Crosses
        'cr' => 'Risti',
        'sc' => 'Saltiiri',       // straight_cross

        // Diagonals
        'ld' => 'Kaartuvaa Vasenta Kohden',       // diagonal_left
        'rd' => 'Kaartoa Kohden',                // diagonal_up_right (stripe_downright diagonal)
        'lud' => 'Sisentyvää Kaartoa Kohden',      // diagonal_up_left
        'rud' => 'Sisentyvää Kaarto Vasenta Kohden', // diagonal_right

        // Halves
        'vh' => 'Kalpeaa kohden',              // half_vertical
        'vhr' => 'Kalpeaa Sisennystä Kohden',   // half_vertical_right
        'hh' => 'Jokaista Vaakaviivaa Kohden',              // half_horizontal
        'hhb' => 'Sisentyvää Vaakaviivaa Kohden',   // half_horizontal_bottom

        // Squares (cantons)
        'bl' => 'Pohja Oikea Kantoni',    // square_bottom_left
        'br' => 'Pohja Vasen Kantoni', // square_bottom_right
        'tl' => 'Pää Oikea Kantoni',  // square_top_left
        'tr' => 'Pää Vasen Kantoni', // square_top_right

        // Triangles
        'bt' => 'Väkänen',           // triangle_bottom
        'tt' => 'Sisentyvä Väkänen',  // triangle_top
        'bts' => 'Pohja Sisennys',   // triangles_bottom
        'tts' => 'Pää Sisennys',  // triangles_top

        // Shapes
        'mc' => 'Pyörännys',   // circle
        'mr' => 'Vinoneliö',   // rhombus

        // Borders
        'bo' => 'Reunus',           // border
        'cbo' => 'Reunuksen Sisennys', // curly_border
        'bri' => 'Kenttä Muuraus',    // bricks

        // Gradients
        'gra' => 'Liukuväri',     // gradient
        'gru' => 'Pohja Liukuväri', // gradient_up

        // Charges (creatures / objects)
        'cre' => 'Creeper Lataus', // creeper
        'sku' => 'Kallo Lataus',   // skull
        'flo' => 'Kukka Lataus', // flower
        'moj' => 'Asia',         // mojang
        'glb' => 'Pallo',         // globe
        'pig' => 'Kuono',         // piglin
        'flow' => 'Virtaus',
        'guster' => 'Puuska',
    ],
];
