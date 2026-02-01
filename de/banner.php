<?php

return [
    'colors' => [
        'black' => 'Schwarz',
        'red' => 'Rot',
        'green' => 'Grün',
        'brown' => 'Braun',
        'blue' => 'Blau',
        'purple' => 'Violett',
        'cyan' => 'Türkis',
        'gray' => 'Grau',
        'dark_gray' => 'Dunkelgrau',
        'pink' => 'Rosa',
        'lime' => 'Hellgrün',
        'yellow' => 'Gelb',
        'light_blue' => 'Hellblau',
        'magenta' => 'Magenta',
        'orange' => 'Orange',
        'white' => 'Weiß',
    ],

    'patterns' => [
        // Base (solid background) – game: "Fully :color Field"
        'base' => 'Vollständiges Feld (:color)',

        // Stripes
        'bs' => 'Bannerfuß',           // stripe_bottom
        'ts' => 'Bannerhaupt',         // stripe_top
        'ls' => 'rechte Flanke',   // stripe_left
        'rs' => 'linke Flanke', // stripe_right
        'cs' => 'Pfahl',          // stripe_center
        'ms' => 'Balken',          // stripe_middle
        'drs' => 'Schrägbalken',         // stripe_downright
        'dls' => 'Schräglinksbalken', // stripe_downleft
        'ss' => 'Pfähle',          // small_stripes

        // Crosses
        'cr' => 'Andreaskreuz',
        'sc' => 'Kreuz',       // straight_cross

        // Diagonals
        'ld' => 'schräglinks geteilt',       // diagonal_left
        'rd' => 'schrägrechts geteilt',                // diagonal_up_right (stripe_downright diagonal)
        'lud' => 'schrägrechts geteilt (invertiert)',      // diagonal_up_left
        'rud' => 'schräglinks geteilt (invertiert)', // diagonal_right

        // Halves
        'vh' => 'Rechts gespalten',              // half_vertical
        'vhr' => 'Links gespalten',   // half_vertical_right
        'hh' => 'Oben geteilt',              // half_horizontal
        'hhb' => 'Unten geteilt',   // half_horizontal_bottom

        // Squares (cantons)
        'bl' => 'rechtes Untereck',    // square_bottom_left
        'br' => 'linkes Untereck', // square_bottom_right
        'tl' => 'rechtes Obereck',  // square_top_left
        'tr' => 'linkes Obereck', // square_top_right

        // Triangles
        'bt' => 'halbe Spitze',           // triangle_bottom
        'tt' => 'gestürzte halbe Spitze',  // triangle_top
        'bts' => 'gespickelter Bannerfuß',   // triangles_bottom
        'tts' => 'gespickeltes Bannerhaupt',  // triangles_top

        // Shapes
        'mc' => 'Kugel',   // circle
        'mr' => 'Raute',   // rhombus

        // Borders
        'bo' => 'Bord',           // border
        'cbo' => 'Spickelbord', // curly_border
        'bri' => 'Feld gemauert',    // bricks

        // Gradients
        'gra' => 'Farbverlauf',     // gradient
        'gru' => 'Farbverlauf (invertiert)', // gradient_up

        // Charges (creatures / objects)
        'cre' => 'Creeper', // creeper
        'sku' => 'Schädel',   // skull
        'flo' => 'Blume', // flower
        'moj' => 'Mojang-Logo',         // mojang
        'glb' => 'Globus',         // globe
        'pig' => 'Schnauze',         // piglin
        'flow' => 'Fluss',
        'guster' => 'Windstoßer',
    ],
];
