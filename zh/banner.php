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
        'base' => '',

        // Stripes
        'bs' => '',           // stripe_bottom
        'ts' => '',         // stripe_top
        'ls' => '',   // stripe_left
        'rs' => '', // stripe_right
        'cs' => '',          // stripe_center
        'ms' => '',          // stripe_middle
        'drs' => '',         // stripe_downright
        'dls' => '', // stripe_downleft
        'ss' => '',          // small_stripes

        // Crosses
        'cr' => '',
        'sc' => '',       // straight_cross

        // Diagonals
        'ld' => '',       // diagonal_left
        'rd' => '',                // diagonal_up_right (stripe_downright diagonal)
        'lud' => '',      // diagonal_up_left
        'rud' => '', // diagonal_right

        // Halves
        'vh' => '',              // half_vertical
        'vhr' => '',   // half_vertical_right
        'hh' => '',              // half_horizontal
        'hhb' => '',   // half_horizontal_bottom

        // Squares (cantons)
        'bl' => '',    // square_bottom_left
        'br' => '', // square_bottom_right
        'tl' => '',  // square_top_left
        'tr' => '', // square_top_right

        // Triangles
        'bt' => '',           // triangle_bottom
        'tt' => '',  // triangle_top
        'bts' => '',   // triangles_bottom
        'tts' => '',  // triangles_top

        // Shapes
        'mc' => '',   // circle
        'mr' => '',   // rhombus

        // Borders
        'bo' => '',           // border
        'cbo' => '', // curly_border
        'bri' => '',    // bricks

        // Gradients
        'gra' => '',     // gradient
        'gru' => '', // gradient_up

        // Charges (creatures / objects)
        'cre' => '', // creeper
        'sku' => '',   // skull
        'flo' => '', // flower
        'moj' => '',         // mojang
        'glb' => '',         // globe
        'pig' => '',         // piglin
        'flow' => '',
        'guster' => '',
    ],
];
