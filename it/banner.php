<?php

return [
    // Heraldic / Minecraft color names from Italian localization
    'colors' => [
        'black' => 'nero',
        'red' => 'rosso',
        'green' => 'verde',
        'brown' => 'marrone',
        'blue' => 'blu',
        'purple' => 'viola',
        'cyan' => 'ciano',
        'gray' => 'grigio',
        'dark_gray' => 'grigio scuro',
        'pink' => 'rosa',
        'lime' => 'lime',
        'yellow' => 'giallo',
        'light_blue' => 'azzurro',
        'magenta' => 'magenta',
        'orange' => 'arancione',
        'white' => 'bianco',
    ],

    'patterns' => [
        // Base (solid background) – "Campo :color"
        'base' => 'Campo :color',

        // Stripes
        'bs' => 'Fascia in punta',      // stripe_bottom
        'ts' => 'Fascia in capo',       // stripe_top
        'ls' => 'Palo destro',          // stripe_left
        'rs' => 'Palo sinistro',        // stripe_right
        'cs' => 'Palo',                 // stripe_center
        'ms' => 'Fascia',               // stripe_middle
        'drs' => 'Banda',               // stripe_downright
        'dls' => 'Sbarra',              // stripe_downleft
        'ss' => 'Palato',               // small_stripes

        // Crosses
        'cr' => 'Decusse',              // cross
        'sc' => 'Croce',                // straight_cross

        // Diagonals
        'ld' => 'Tagliato',                       // diagonal_left
        'rd' => 'Trinciato',                      // diagonal_right
        'lud' => 'Trinciato rovesciato',          // diagonal_up_left
        'rud' => 'Tagliato rovesciato',           // diagonal_up_right

        // Halves
        'vh' => 'Partito',                    // half_vertical
        'vhr' => 'Partito rivoltato',          // half_vertical_right
        'hh' => 'Troncato',                    // half_horizontal
        'hhb' => 'Troncato rovesciato',        // half_horizontal_bottom

        // Squares (cantons)
        'bl' => 'Cantone destro della punta',   // square_bottom_left
        'br' => 'Cantone sinistro della punta', // square_bottom_right
        'tl' => 'Cantone destro del capo',      // square_top_left
        'tr' => 'Cantone sinistro del capo',    // square_top_right

        // Triangles
        'bt' => 'Punta',                 // triangle_bottom
        'tt' => 'Punta rovesciata',      // triangle_top
        'bts' => 'Punta cuneata',        // triangles_bottom
        'tts' => 'Capo cuneato',         // triangles_top

        // Shapes
        'mc' => 'Torta',     // circle (roundel)
        'mr' => 'Losanga',   // rhombus

        // Borders
        'bo' => 'Bordura',               // border
        'cbo' => 'Bordura dentata',      // curly_border
        'bri' => 'Seminato di mattoni',  // bricks

        // Gradients
        'gra' => 'Sfumatura in capo',    // gradient
        'gru' => 'Sfumatura in punta',   // gradient_up

        // Charges (creatures / objects)
        'cre' => 'Volto di creeper',     // creeper
        'sku' => 'Teschio',              // skull
        'flo' => 'Fiore',                // flower
        'moj' => 'Logo',                 // mojang
        'glb' => 'Globo',                // globe
        'pig' => 'Grugno',               // piglin
        'flow' => 'Flusso',              // flow
        'guster' => 'Raffica',           // guster
    ],
];
