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

    'accepted' => ':attribute musí být přijat.',
    'active_url' => ':attribute není platná adresa URL.',
    'after' => ':attribute musí být datum po :date.',
    'after_or_equal' => ':attribute musí být datum po nebo rovno :date.',
    'alpha' => ':attribute může obsahovat pouze písmena.',
    'alpha_dash' => ':attribute může obsahovat pouze písmena, číslice, pomlčky a podtržítka.',
    'alpha_num' => ':attribute může obsahovat pouze písmena a čísla.',
    'array' => ':attribute musí být pole.',
    'before' => ':attribute musí být datum před :date.',
    'before_or_equal' => ':attribute musí být datum před nebo rovno :date.',
    'between' => [
        'numeric' => ':attribute musí být mezi :min a :max.',
        'file' => ':attribute musí být v rozmezí :min až :max kilobajtů.',
        'string' => ':attribute musí být v rozmezí :min a :max znaků.',
        'array' => ':attribute musí mít mezi :min a :max položkami.',
    ],
    'boolean' => ':attribute musí být pravda nebo nepravda.',
    'confirmed' => 'Potvrzení :attribute se neshoduje.',
    'current_password' => 'The password is incorrect.',
    'date' => ':attribute není platné datum.',
    'date_equals' => ':attribute musí být datum rovnající se :date.',
    'date_format' => ':attribute neodpovídá formátu :format.',
    'different' => ':attribute a :other se musí lišit.',
    'digits' => ':attribute musí obsahovat :digits číslic.',
    'digits_between' => ':attribute musí být v rozmezí :min a :max číslic.',
    'dimensions' => ':attribute má neplatné rozměry obrázku.',
    'distinct' => 'Pole :attribute má duplicitní hodnotu.',
    'email' => ':attribute musí být platná e-mailová adresa.',
    'ends_with' => ':attribute musí končit jedním z těchto znaků: :values.',
    'exists' => 'Vybraný :attribute je neplatný.',
    'file' => ':attribute musí být soubor.',
    'filled' => 'Pole :attribute musí mít hodnotu.',
    'gt' => [
        'numeric' => ':attribute musí být větší než :value.',
        'file' => ':attribute musí být větší než :value kilobajtů.',
        'string' => ':attribute musí být větší než :value znaků.',
        'array' => ':attribute musí obsahovat více než :value položek.',
    ],
    'gte' => [
        'numeric' => ':attribute musí být větší nebo rovno :value.',
        'file' => ':attribute musí být větší nebo roven :value kilobajtů.',
        'string' => ':attribute musí být větší nebo roven :value znaků.',
        'array' => ':attribute musí mít :value položky nebo více.',
    ],
    'image' => ':attribute musí být obrázek.',
    'in' => 'Vybraný :attribute je neplatný.',
    'in_array' => 'Pole :attribute neexistuje v :other.',
    'integer' => ':attribute musí být celé číslo.',
    'ip' => ':attribute musí být platná IP adresa.',
    'ipv4' => ':attribute musí být platná IPv4 adresa.',
    'ipv6' => ':attribute musí být platná IPv6 adresa.',
    'json' => ':attribute musí být platný řetězec JSON.',
    'lt' => [
        'numeric' => ':attribute musí být menší než :value.',
        'file' => ':attribute musí být menší než :value kilobajtů.',
        'string' => ':attribute musí být menší než :value znaků.',
        'array' => ':attribute musí mít méně než :value položek.',
    ],
    'lte' => [
        'numeric' => ':attribute musí být menší nebo rovno :value.',
        'file' => ':attribute musí být menší nebo roven :value kilobajtů.',
        'string' => ':attribute musí mít menší nebo rovno :value znaků.',
        'array' => ':attribute nesmí obsahovat více než :value položek.',
    ],
    'max' => [
        'numeric' => ':attribute nesmí být větší než :max.',
        'file' => ':attribute nesmí být větší než :max kilobajtů.',
        'string' => ':attribute nesmí být větší než :max znaků.',
        'array' => ':attribute nesmí obsahovat více než :max položek.',
    ],
    'mimes' => ':attribute musí být soubor typu: :values.',
    'mimetypes' => ':attribute musí být soubor typu: :values.',
    'min' => [
        'numeric' => ':attribute musí být alespoň :min.',
        'file' => ':attribute musí mít alespoň :min kilobajtů.',
        'string' => ':attribute musí mít alespoň :min znaků.',
        'array' => ':attribute musí obsahovat alespoň :min položek.',
    ],
    'multiple_of' => ':attribute musí být násobek :value',
    'not_in' => 'Vybraný :attribute je neplatný.',
    'not_regex' => 'Formát :attribute je neplatný.',
    'numeric' => ':attribute musí být číslo.',
    'password' => 'Nesprávné heslo.',
    'present' => ':attribute musí být vyplněno.',
    'regex' => 'Formát :attribute je neplatný.',
    'required' => 'Pole :attribute je povinné.',
    'required_if' => ':attribute je vyžadováno pokud :other je :value.',
    'required_unless' => ':attribute je vyžadováno pokud :other není v :values.',
    'required_with' => 'Pole :attribute je vyžadováno, pokud je zvoleno :values.',
    'required_with_all' => 'Pole :attribute je vyžadováno, pokud je k dispozici :values.',
    'required_without' => 'Pole :attribute je vyžadováno, pokud :values není k dispozici.',
    'required_without_all' => 'Pole :attribute je vyžadováno, pokud není k dispozici žádná z :values.',
    'same' => ':attribute a :other se musí shodovat.',
    'size' => [
        'numeric' => ':attribute musí být :size.',
        'file' => ':attribute musí mít :size kilobajtů.',
        'string' => ':attribute musí mít :size znaků.',
        'array' => ':attribute musí obsahovat :size položek.',
    ],
    'starts_with' => ':attribute musí začínat jedním z těchto atributů: :values.',
    'string' => ':attribute musí být řetězec.',
    'timezone' => ':attribute musí být platná zóna.',
    'unique' => ':attribute již byl použit.',
    'uploaded' => ':attribute se nepodařilo nahrát.',
    'url' => 'Formát :attribute je neplatný.',
    'uuid' => ':attribute musí být platný UUID.',

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
            'rule-name' => 'vlastní zpráva',
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
