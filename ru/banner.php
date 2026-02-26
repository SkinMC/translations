<?php

return [
    'colors' => [
        'black' => 'Черный',
        'red' => 'Красный',
        'green' => 'Зелёный',
        'brown' => 'Коричневый',
        'blue' => 'Синий',
        'purple' => 'Фиолетовый',
        'cyan' => 'Бирюзовый',
        'gray' => 'Серый',
        'dark_gray' => 'Тёмно-серый',
        'pink' => 'Розовый',
        'lime' => 'Лаймовый',
        'yellow' => 'Жёлтый',
        'light_blue' => 'Голубой',
        'magenta' => 'Пурпурный',
        'orange' => 'Оранжевый',
        'white' => 'Белый',
    ],

    'patterns' => [
        // Base (solid background) – game: "Fully :color Field"
        'base' => 'Полностью: поле цвета',

        // Stripes
        'bs' => 'База',           // stripe_bottom
        'ts' => 'Главный',         // stripe_top
        'ls' => 'Бледный Декстер',   // stripe_left
        'rs' => 'Бледный Зловещий', // stripe_right
        'cs' => 'Бледный',          // stripe_center
        'ms' => 'Фесс',          // stripe_middle
        'drs' => 'Изгиб',         // stripe_downright
        'dls' => 'Изгиб влево', // stripe_downleft
        'ss' => 'Пали',          // small_stripes

        // Crosses
        'cr' => 'Крест',
        'sc' => 'Солтир',       // straight_cross

        // Diagonals
        'ld' => 'По левой стороне',       // diagonal_left
        'rd' => 'Через Изгиб',                // diagonal_up_right (stripe_downright diagonal)
        'lud' => 'На изгиб, перевернутый',      // diagonal_up_left
        'rud' => 'Перевернутый изгиб влево', // diagonal_right

        // Halves
        'vh' => 'Для Бледный',              // half_vertical
        'vhr' => 'На пале Инвертированный',   // half_vertical_right
        'hh' => 'Для Фесса',              // half_horizontal
        'hhb' => 'Перевернутый пополам',   // half_horizontal_bottom

        // Squares (cantons)
        'bl' => 'База Декстер Кантон',    // square_bottom_left
        'br' => 'База Зловещий Кантон', // square_bottom_right
        'tl' => 'Начальник Декстер Кантон',  // square_top_left
        'tr' => 'Главный Злодей Кантон', // square_top_right

        // Triangles
        'bt' => 'Шеврон',           // triangle_bottom
        'tt' => 'Перевернутый шеврон',  // triangle_top
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
