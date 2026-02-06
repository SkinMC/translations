<?php

return [
    'colors' => [
        'black' => 'Fekete',
        'red' => 'Vörös',
        'green' => 'Zöld',
        'brown' => 'Barna',
        'blue' => 'Kék',
        'purple' => 'Lila',
        'cyan' => 'Türkizkék',
        'gray' => 'Szürke',
        'dark_gray' => 'Sötétszürke',
        'pink' => 'Rózsaszín',
        'lime' => 'Limezöld',
        'yellow' => 'Sárga',
        'light_blue' => 'Világoskék',
        'magenta' => 'Bíborvörös',
        'orange' => 'Narancssárga',
        'white' => 'Fehér',
    ],

    'patterns' => [
        // Base (solid background) – game: "Fully :color Field"
        'base' => 'Teljes :color mező',

        // Stripes
        'bs' => 'Alsó sáv',           // stripe_bottom
        'ts' => 'Felső sáv',         // stripe_top
        'ls' => 'Sápadt Dexter',   // stripe_left
        'rs' => 'Sápadt bajlós', // stripe_right
        'cs' => 'Sápadt',          // stripe_center
        'ms' => 'Stílusos',          // stripe_middle
        'drs' => 'Hajlít',         // stripe_downright
        'dls' => 'Bajlós Ferde', // stripe_downleft
        'ss' => 'Játékos',          // small_stripes

        // Crosses
        'cr' => 'Kereszt',
        'sc' => 'Ferde kereszt',       // straight_cross

        // Diagonals
        'ld' => 'Ferde bal',       // diagonal_left
        'rd' => 'Ferde',                // diagonal_up_right (stripe_downright diagonal)
        'lud' => 'Ferde fordított',      // diagonal_up_left
        'rud' => 'Ferde bal fordított', // diagonal_right

        // Halves
        'vh' => 'Függőleges',              // half_vertical
        'vhr' => 'Függőleges fordított',   // half_vertical_right
        'hh' => 'Vízszintes',              // half_horizontal
        'hhb' => 'Vízszintes fordított',   // half_horizontal_bottom

        // Squares (cantons)
        'bl' => 'Jobb alsó sarok',    // square_bottom_left
        'br' => 'Bal alsó sarok', // square_bottom_right
        'tl' => 'Szegélyfogazat',  // square_top_left
        'tr' => 'Bal felső sarok', // square_top_right

        // Triangles
        'bt' => 'Chevron',           // triangle_bottom
        'tt' => 'Fordított Chevron',  // triangle_top
        'bts' => 'Recés alap',   // triangles_bottom
        'tts' => 'Szegélyfogazat',  // triangles_top

        // Shapes
        'mc' => 'Kör',   // circle
        'mr' => 'Rombusz',   // rhombus

        // Borders
        'bo' => 'Keret',           // border
        'cbo' => 'Recés keret', // curly_border
        'bri' => 'Téglakő',    // bricks

        // Gradients
        'gra' => 'Színátmenet',     // gradient
        'gru' => 'Színáttűnés', // gradient_up

        // Charges (creatures / objects)
        'cre' => 'Creeper', // creeper
        'sku' => 'Koponya',   // skull
        'flo' => 'Virág', // flower
        'moj' => 'Dolog',         // mojang
        'glb' => 'Földgömb',         // globe
        'pig' => 'Orr',         // piglin
        'flow' => 'Áramlás',
        'guster' => 'Szellő',
    ],
];
