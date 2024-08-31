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

    'accepted' => ':attribute должен быть принят.',
    'active_url' => ':attribute не является допустимым URL.',
    'after' => ':attribute должен быть датой после :date.',
    'after_or_equal' => 'Значение :attribute должно быть датой после или равным :date.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры, тире и знаки подчеркивания.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'before' => ':attribute должно быть датой до :date.',
    'before_or_equal' => 'Значение :attribute должно быть датой до или равным :date.',
    'between' => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file' => ':attribute должен быть между :min и :max килобайт.',
        'string' => 'Значение :attribute должно быть между :min и :max символов.',
        'array' => ':attribute должен иметь между :min и :max элементов.',
    ],
    'boolean' => 'Поле :attribute должно быть true или false.',
    'confirmed' => 'Подтверждение :attribute не совпадает.',
    'current_password' => 'Неверный пароль.',
    'date' => ':attribute не является допустимой датой.',
    'date_equals' => 'Значение :attribute должно быть датой равной :date.',
    'date_format' => ':attribute не соответствует формату :format.',
    'different' => ':attribute и :other должны быть разными.',
    'digits' => 'Значение :attribute должно быть :digits цифр.',
    'digits_between' => ':attribute должен быть между :min и :max цифр.',
    'dimensions' => 'Поле :attribute имеет неверные размеры изображения.',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'email' => 'Поле :attribute должно быть действительным адресом электронной почты.',
    'ends_with' => 'Значение :attribute должно заканчиваться одним из следующих: :values.',
    'exists' => 'Выбранный :attribute неверен.',
    'file' => 'Поле :attribute должно быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'numeric' => 'Значение :attribute должно быть больше чем :value.',
        'file' => 'Значение :attribute должно быть больше :value килобайт.',
        'string' => 'Значение :attribute должно быть больше чем :value символов.',
        'array' => 'Поле :attribute должно содержать больше чем :value-элементов.',
    ],
    'gte' => [
        'numeric' => 'Значение :attribute должно быть больше или равно :value.',
        'file' => 'Значение :attribute должно быть больше или равно :value килобайт.',
        'string' => 'Значение :attribute должно быть больше или равно :value.',
        'array' => ':attribute должен иметь :value элементы или больше.',
    ],
    'image' => 'Поле :attribute должно быть изображением.',
    'in' => 'Выбранный :attribute неверен.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => ':attribute должно быть целым числом.',
    'ip' => 'Поле :attribute должно быть действительным IP-адресом.',
    'ipv4' => ':attribute должно быть допустимым IPv4 адресом.',
    'ipv6' => ':attribute должно быть допустимым IPv6 адресом.',
    'json' => ':attribute должен быть допустимой строкой JSON.',
    'lt' => [
        'numeric' => 'Значение :attribute должно быть меньше, чем :value.',
        'file' => 'Значение :attribute должно быть меньше :value килобайт.',
        'string' => 'Значение :attribute должно быть меньше :value.',
        'array' => 'Значение :attribute должно быть меньше чем :value.',
    ],
    'lte' => [
        'numeric' => 'Значение :attribute должно быть меньше или равно :value.',
        'file' => 'Значение :attribute должно быть меньше или равно :value килобайт.',
        'string' => 'Значение :attribute должно быть меньше или равно :value.',
        'array' => 'Поле :attribute не должно содержать больше чем :value-элементов.',
    ],
    'max' => [
        'numeric' => ':attribute не может быть больше :max.',
        'file' => ':attribute не может быть больше :max килобайт.',
        'string' => ':attribute не может быть больше :max символов.',
        'array' => ':attribute не может иметь больше чем :max элементов.',
    ],
    'mimes' => 'Значение :attribute должно быть файлом типа: :values.',
    'mimetypes' => 'Значение :attribute должно быть файлом типа: :values.',
    'min' => [
        'numeric' => 'Поле :attribute должно быть не менее :min.',
        'file' => 'Значение :attribute должно быть не менее :min килобайт.',
        'string' => 'Значение :attribute должно быть не менее :min символов.',
        'array' => 'Поле :attribute должно содержать не менее :min элементов.',
    ],
    'multiple_of' => ':attribute должен быть кратен из :value',
    'not_in' => 'Выбранный :attribute неверен.',
    'not_regex' => 'Формат :attribute неверен.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'password' => 'Неверный пароль.',
    'present' => 'Поле :attribute должно быть заполнено.',
    'regex' => 'Формат :attribute неверен.',
    'required' => 'Поле :attribute является обязательным.',
    'required_if' => 'Поле :attribute является обязательным, если :other равно :value.',
    'required_unless' => 'Поле :attribute является обязательным, если только :other не находится в :values.',
    'required_with' => 'Поле :attribute обязательно для заполнения, когда :values присутствует.',
    'required_with_all' => 'Поле :attribute является обязательным, когда :values присутствуют.',
    'required_without' => 'Поле :attribute является обязательным, если :values не указано.',
    'required_without_all' => 'Поле :attribute является обязательным, если ни одно из :values не указано.',
    'same' => ':attribute и :other должны совпадать.',
    'size' => [
        'numeric' => 'Поле :attribute должно быть :size.',
        'file' => 'Значение :attribute должно быть :size килобайт.',
        'string' => 'Поле :attribute должно содержать :size символов.',
        'array' => 'Поле :attribute должно содержать :size элементов.',
    ],
    'starts_with' => ':attribute должен начинаться с одного из следующих значений: :values.',
    'string' => 'Поле :attribute должно быть строкой.',
    'timezone' => 'Поле :attribute должно быть допустимой зоной.',
    'unique' => ':attribute уже занято.',
    'uploaded' => 'Не удалось загрузить :attribute.',
    'url' => 'Формат :attribute неверен.',
    'uuid' => 'Значение :attribute должно быть корректным UUID.',

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
            'rule-name' => 'пользовательское сообщение',
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
