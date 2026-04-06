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
        'bts' => 'Базовый с отступом',   // triangles_bottom
        'tts' => 'Главный с отступом',  // triangles_top

        // Shapes
        'mc' => 'Кокарда',   // circle
        'mr' => 'Ромб',   // rhombus

        // Borders
        'bo' => 'Кайма',           // border
        'cbo' => 'Кайма с отступом', // curly_border
        'bri' => 'Поле каменной кладки',    // bricks

        // Gradients
        'gra' => 'Градиент',     // gradient
        'gru' => 'Градиент основания', // gradient_up

        // Charges (creatures / objects)
        'cre' => 'Заряд крипера', // creeper
        'sku' => 'Заряд черепа',   // skull
        'flo' => 'Цветочный заряд', // flower
        'moj' => 'Нечто',         // mojang
        'glb' => 'Глобус',         // globe
        'pig' => 'Рыло',         // piglin
        'flow' => 'Цвветок',
        'guster' => 'Порыв ветра',
    ],
];
