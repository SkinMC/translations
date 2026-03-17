<?php

return [
    'colors' => [
        'black' => 'Negro',
        'red' => 'Rojo',
        'green' => 'Verde',
        'brown' => 'Marrón',
        'blue' => 'Azul',
        'purple' => 'Morado',
        'cyan' => 'Cian',
        'gray' => 'Gris',
        'dark_gray' => 'Gris Oscuro',
        'pink' => 'Rosa',
        'lime' => 'Lima',
        'yellow' => 'Amarillo',
        'light_blue' => 'Azul claro',
        'magenta' => 'Magenta',
        'orange' => 'Naranja',
        'white' => 'Blanco',
    ],

    'patterns' => [
        // Base (solid background) – game: "Fully :color Field"
        'base' => 'Estandarte totalmente :color',

        // Stripes
        'bs' => 'Campaña',           // stripe_bottom
        'ts' => 'Jefe',         // stripe_top
        'ls' => 'Palo a diestra',   // stripe_left
        'rs' => 'Palo a siniestra', // stripe_right
        'cs' => 'Palo',          // stripe_center
        'ms' => 'Franja',          // stripe_middle
        'drs' => 'Banda',         // stripe_downright
        'dls' => 'Banda a siniestra', // stripe_downleft
        'ss' => 'Bastonado',          // small_stripes

        // Crosses
        'cr' => 'Aspa',
        'sc' => 'Cruz',       // straight_cross

        // Diagonals
        'ld' => 'Tajado',       // diagonal_left
        'rd' => 'Tronchado',                // diagonal_up_right (stripe_downright diagonal)
        'lud' => 'Tronchado invertido',      // diagonal_up_left
        'rud' => 'Tajado invertido', // diagonal_right

        // Halves
        'vh' => 'Flanco',              // half_vertical
        'vhr' => 'Flanco invertido',   // half_vertical_right
        'hh' => 'Cortado',              // half_horizontal
        'hhb' => 'Cortado invertido',   // half_horizontal_bottom

        // Squares (cantons)
        'bl' => 'Cantón en campaña a diestra',    // square_bottom_left
        'br' => 'Cantón en campaña a siniestra', // square_bottom_right
        'tl' => 'Cantón en jefe a diestra',  // square_top_left
        'tr' => 'Cantón en jefe a siniestra', // square_top_right

        // Triangles
        'bt' => 'Chevrón',           // triangle_bottom
        'tt' => 'Chevrón invertido',  // triangle_top
        'bts' => 'Campaña dentada',   // triangles_bottom
        'tts' => 'Jefe dentado',  // triangles_top

        // Shapes
        'mc' => 'Roel',   // circle
        'mr' => 'Rombo',   // rhombus

        // Borders
        'bo' => 'Bordura',           // border
        'cbo' => 'Bordura dentada', // curly_border
        'bri' => 'Mazonado',    // bricks

        // Gradients
        'gra' => 'Gradiente',     // gradient
        'gru' => 'Gradiente en campaña', // gradient_up

        // Charges (creatures / objects)
        'cre' => 'Estampado de creeper', // creeper
        'sku' => 'Estampado de calavera',   // skull
        'flo' => 'Estampado de flor', // flower
        'moj' => 'Estampado de una cosa',         // mojang
        'glb' => 'Estampado de planeta',         // globe
        'pig' => 'Estampado de hocico',         // piglin
        'flow' => 'Estampado de espiral',
        'guster' => 'Estampado de breeze',
    ],
];
