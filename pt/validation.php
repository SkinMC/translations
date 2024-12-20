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

    'accepted' => 'O :attribute precisam ser aceitos.',
    'active_url' => 'O :attribute não é um URL válido.',
    'after' => 'O :attribute deve ser uma data após :date.',
    'after_or_equal' => 'O :attribute deve ser uma data após ou igual a :data.',
    'alpha' => 'O :attribute deve conter somente letras.',
    'alpha_dash' => 'O campo :attribute deve conter apenas letras, números e traços.',
    'alpha_num' => 'O :attribute deve conter somente letras e números.',
    'array' => 'O :attribute deve ser um array.',
    'before' => 'O :attribute deve ser uma data anterior a :date.',
    'before_or_equal' => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O :attribute deve ser entre :min — :max.',
        'file' => 'O :attribute deve ser entre :min — :max kilobytes.',
        'string' => 'O :attribute deve ser entre :min — :max caracteres.',
        'array' => 'O :attribute deve ser entre :min e :max dígitos.',
    ],
    'boolean' => 'O :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'A confirmação do :attribute não coincide.',
    'current_password' => 'A senha está incorreta.',
    'date' => 'O :attribute não é uma data válida.',
    'date_equals' => 'O :attribute deve ser uma data igual a :date.',
    'date_format' => 'O :attribute não corresponde ao formato :format.',
    'different' => 'O :attribute e o :other devem ser diferentes.',
    'digits' => 'O :attribute deve conter :digits dígitos.',
    'digits_between' => 'O :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'O :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O :attribute tem um valor duplicado.',
    'email' => 'O :attribute deve ser um endereço de e-mail válido.',
    'ends_with' => 'O :attribute deve terminar com um dos seguintes: :values.',
    'exists' => 'O :attribute selecionado é inválido.',
    'file' => 'O :attribute deve ser um arquivo.',
    'filled' => 'O :attribute é um campo obrigatório.',
    'gt' => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file' => 'O arquivo :attribute deve ser maior que :value kilobytes.',
        'string' => 'O :attribute deve ser maior que :value caracteres.',
        'array' => 'O :attribute deve ter mais de :value itens.',
    ],
    'gte' => [
        'numeric' => 'O :attribute deve ser maior que ou igual a :value.',
        'file' => 'O :attribute deve ser maior que ou igual a :value kilobytes.',
        'string' => 'O :attribute deve ser maior que ou igual a :value caracteres.',
        'array' => 'O :attribute deve ter :value itens ou mais.',
    ],
    'image' => 'O :attribute deve ser uma imagem.',
    'in' => 'O :attribute selecionado é inválido.',
    'in_array' => 'O campo do :attribute não existe em :other.',
    'integer' => 'O :attribute deve ser inteiro.',
    'ip' => 'O :attribute deve ser um endereço de IP válido.',
    'ipv4' => 'O :attribute deve ser um endereço de IPv4 válido.',
    'ipv6' => 'O :attribute deve ser um endereço de IPv6 válido.',
    'json' => 'O :attribute deve ser uma string JSON válida.',
    'lt' => [
        'numeric' => 'O :attribute deve ser menor que :value.',
        'file' => 'O :attribute deve ser menor que :value kilobytes.',
        'string' => 'O :attribute deve ter menos que :value caracteres.',
        'array' => 'O :attribute deve ter menos que :value itens.',
    ],
    'lte' => [
        'numeric' => 'O :attribute deve ser menor que ou igual a :value.',
        'file' => 'O :attribute deve ser menor que ou igual a :value kilobytes.',
        'string' => 'O :attribute deve ser menor que ou igual a :value caracteres.',
        'array' => 'O :attribute deve não ter mais que :value itens.',
    ],
    'max' => [
        'numeric' => 'O :attribute não deve ser maior que :max.',
        'file' => 'O :attribute não pode ser maior que :max kilobytes.',
        'string' => 'O :attribute não pode ter mais que :max caracteres.',
        'array' => 'O :attribute deve não ter mais que :max itens.',
    ],
    'mimes' => 'O :attribute deve ser um arquivo de tipo: :values.',
    'mimetypes' => 'O :attribute deve ser um arquivo de tipo: :values.',
    'min' => [
        'numeric' => 'O :attribute deve ser no mínimo :min.',
        'file' => 'O :attribute deve ter no mínimo :min kilobytes.',
        'string' => 'O :attribute deve ter pelo menos :min caracteres.',
        'array' => 'O :attribute deve ter no mínimo :min itens.',
    ],
    'multiple_of' => 'O :attribute deve ser múltiplo de :value',
    'not_in' => 'O :attribute selecionado é inválido.',
    'not_regex' => 'O formato de :attribute é inválido.',
    'numeric' => 'O :attribute deve ser um número.',
    'password' => 'A senha está incorreta.',
    'present' => 'O campo :attribute deve estar presente.',
    'regex' => 'O formato de :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo de :attribute é requerido quando :other é :value.',
    'required_unless' => 'O campo :attribute é obrigatório a não ser que :other estiver em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values estão presentes.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values está presente.',
    'same' => 'Os campos :attribute e :other devem conter valores iguais.',
    'size' => [
        'numeric' => 'O :attribute deve ser :size.',
        'file' => 'O :attribute deve ter :size kilobytes.',
        'string' => 'O :attribute deve ter :size caracteres.',
        'array' => 'O :attribute deve conter :size itens.',
    ],
    'starts_with' => 'O :attribute deve começar com um dos seguintes :values.',
    'string' => 'O :attribute de ser uma string.',
    'timezone' => 'O campo :attribute deve conter um fuso horário válido.',
    'unique' => 'O :attribute já está em uso.',
    'uploaded' => 'Falha no Upload do arquivo :attribute.',
    'url' => 'O formato de :attribute é inválido.',
    'uuid' => 'O campo :attribute deve ser um UUID válido.',

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
            'rule-name' => 'mensagem-personalizada',
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
