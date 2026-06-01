<?php

return [
    'colors' => [
        'black' => '黑',
        'red' => '红',
        'green' => '绿',
        'brown' => '棕',
        'blue' => '蓝',
        'purple' => '紫',
        'cyan' => '青',
        'gray' => '灰',
        'dark_gray' => '深灰',
        'pink' => '粉',
        'lime' => '黄绿',
        'yellow' => '黄',
        'light_blue' => '浅蓝',
        'magenta' => '品红',
        'orange' => '橙',
        'white' => '白',
    ],

    'patterns' => [
        // Base (solid background) – game: "Fully :color Field"
        'base' => 'Fully :color Field',

        // Stripes
        'bs' => 'Base',           // stripe_bottom
        'ts' => 'Chief',         // stripe_top
        'ls' => 'Pale Dexter',   // stripe_left
        'rs' => 'Pale Sinister', // stripe_right
        'cs' => 'Pale',          // stripe_center
        'ms' => 'Fess',          // stripe_middle
        'drs' => 'Bend',         // stripe_downright
        'dls' => 'Bend Sinister', // stripe_downleft
        'ss' => 'Paly',          // small_stripes

        // Crosses
        'cr' => 'Cross',
        'sc' => 'Saltire',       // straight_cross

        // Diagonals
        'ld' => 'Per Bend Sinister',       // diagonal_left
        'rd' => 'Per Bend',                // diagonal_up_right (stripe_downright diagonal)
        'lud' => 'Per Bend Inverted',      // diagonal_up_left
        'rud' => 'Per Bend Sinister Inverted', // diagonal_right

        // Halves
        'vh' => 'Per Pale',              // half_vertical
        'vhr' => 'Per Pale Inverted',   // half_vertical_right
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
        'tts' => 'Chief Indented',  // triangles_top

        // Shapes
        'mc' => 'Roundel',   // circle
        'mr' => 'Lozenge',   // rhombus

        // Borders
        'bo' => 'Bordure',           // border
        'cbo' => 'Bordure Indented', // curly_border
        'bri' => 'Field Masoned',    // bricks

        // Gradients
        'gra' => 'Gradient',     // gradient
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
