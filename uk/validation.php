<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Необхідно прийняти атрибут :attribute.',
    'active_url' => ':attribute не є дійсною URL-адресою.',
    'after' => ':attribute має бути датою після :date.',
    'after_or_equal' => ':attribute має бути датою після або дорівнювати :date.',
    'alpha' => ':attribute може містити лише літери.',
    'alpha_dash' => ':attribute може містити лише літери, цифри, тире та підкреслення.',
    'alpha_num' => ':attribute може містити лише літери та цифри.',
    'array' => ':attribute має бути масивом.',
    'before' => ':attribute має бути датою перед :date.',
    'before_or_equal' => ':attribute має бути датою, що передує або дорівнює :date.',
    'between' => [
        'numeric' => ':attribute має бути між :min та :max.',
        'file' => ':attribute має бути між :min і :max кілобайтами.',
        'string' => ':attribute має бути між символами :min і :max.',
        'array' => ':attribute має містити між елементами :min і :max.',
    ],
    'boolean' => ':attribute має мати значення true або false.',
    'confirmed' => 'Підтвердження :attribute не збігається.',
    'current_password' => 'Пароль неправильний.',
    'date' => ':attribute не є дійсною датою.',
    'date_equals' => ':attribute має бути датою, що дорівнює :date.',
    'date_format' => ':attribute не відповідає формату :format.',
    'different' => ':attribute та :other мають бути різними.',
    'digits' => ':attribute має бути :digits цифрами.',
    'digits_between' => ':attribute має бути між :min та :max цифрами.',
    'dimensions' => ':attribute має недійсні розміри зображення.',
    'distinct' => ':attribute має повторюване значення.',
    'email' => ':attribute має бути дійсною електронною адресою.',
    'ends_with' => ':attribute має закінчуватися одним із таких: :values.',
    'exists' => 'Вибраний :attribute недійсний.',
    'file' => ':attribute має бути файлом.',
    'filled' => 'Поле :attribute має містити значення.',
    'gt' => [
        'numeric' => ':attribute має бути більшим за :value.',
        'file' => ':attribute має бути більшим за :value кілобайт.',
        'string' => ':attribute має бути більшим за :value.',
        'array' => ':attribute має містити більше ніж :value елементів.',
    ],
    'gte' => [
        'numeric' => ':attribute має бути більшим або дорівнювати :value.',
        'file' => ':attribute має бути більшим або дорівнювати :value кілобайтам.',
        'string' => ':attribute має бути більше або дорівнювати :value.',
        'array' => ':attribute повинен містити :value елементів або більше.',
    ],
    'image' => ':attribute має бути зображенням.',
    'in' => 'Вибраний :attribute недійсний.',
    'in_array' => 'Поле :attribute не існує в :other.',
    'integer' => ':attribute має бути цілим числом.',
    'ip' => ':attribute має бути дійсною IP-адресою.',
    'ipv4' => ':attribute має бути дійсною адресою IPv4.',
    'ipv6' => ':attribute має бути дійсною адресою IPv6.',
    'json' => ':attribute має бути дійсним рядком JSON.',
    'lt' => [
        'numeric' => ':attribute має бути меншим за :value.',
        'file' => ':attribute має бути меншим за :value кілобайт.',
        'string' => ':attribute має містити менше ніж :value символів.',
        'array' => ':attribute має містити менше ніж :value елементів.',
    ],
    'lte' => [
        'numeric' => ':attribute має бути меншим або дорівнювати :value.',
        'file' => ':attribute має бути меншим або дорівнювати :value кілобайтам.',
        'string' => ':attribute має містити менше або дорівнювати :value символам.',
        'array' => ':attribute не може містити більше ніж :value елементів.',
    ],
    'max' => [
        'numeric' => ':attribute не може перевищувати :max.',
        'file' => ':attribute не може бути більшим за :max кілобайт.',
        'string' => ':attribute не може містити більше :max символів.',
        'array' => ':attribute не може містити більше ніж :max елементів.',
    ],
    'mimes' => ':attribute має бути файлом типу: :values.',
    'mimetypes' => ':attribute має бути файлом типу: :values.',
    'min' => [
        'numeric' => ':attribute має бути принаймні :min.',
        'file' => ':attribute має бути не менше :min кілобайт.',
        'string' => ':attribute має містити принаймні :min символів.',
        'array' => ':attribute має містити принаймні :min елементів.',
    ],
    'multiple_of' => ':attribute має бути кратним :value',
    'not_in' => 'Вибраний :attribute недійсний.',
    'not_regex' => 'Формат :attribute недійсний.',
    'numeric' => ':attribute має бути числом.',
    'password' => 'Пароль неправильний.',
    'present' => 'Поле :attribute має бути присутнім.',
    'regex' => 'Формат :attribute недійсний.',
    'required' => 'Поле :attribute є обов\'язковим.',
    'required_if' => 'Поле :attribute є обов\'язковим, якщо :other дорівнює :value.',
    'required_unless' => 'Поле :attribute є обов\'язковим, якщо :other не міститься в :values.',
    'required_with' => 'Поле :attribute є обов\'язковим, якщо присутній :values.',
    'required_with_all' => 'Поле :attribute є обов\'язковим, якщо присутні :values.',
    'required_without' => 'Поле :attribute є обов\'язковим, якщо немає :values.',
    'required_without_all' => 'Поле :attribute є обов\'язковим, якщо немає жодного з :values.',
    'same' => ':attribute та :other мають збігатися.',
    'size' => [
        'numeric' => ':attribute має бути :size.',
        'file' => ':attribute має бути :size кілобайт.',
        'string' => ':attribute має бути :size символів.',
        'array' => ':attribute повинен містити :size елементів.',
    ],
    'starts_with' => ':attribute має починатися з одного з наступного: :values.',
    'string' => ':attribute має бути рядком.',
    'timezone' => ':attribute має бути дійсною зоною.',
    'unique' => ':attribute уже використано.',
    'uploaded' => 'Не вдалося завантажити :attribute.',
    'url' => 'Формат :attribute недійсний.',
    'uuid' => ':attribute має бути дійсним UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'користувацьке-повідомлення',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
