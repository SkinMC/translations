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

    'accepted' => 'L\'attributo :attribute deve essere accettato.',
    'active_url' => 'L\'attributo :attribute non è un URL valido.',
    'after' => 'L\'attributo :attribute deve essere una data dopo :date.',
    'after_or_equal' => 'L\'attributo :attribute deve essere una data dopo o uguale a :date.',
    'alpha' => 'Il campo :attribute può contenere solo lettere.',
    'alpha_dash' => 'Il campo :attribute può contenere solo lettere, numeri, trattini e trattini bassi.',
    'alpha_num' => 'Il campo :attribute può contenere solo lettere e numeri.',
    'array' => 'L\'attributo :attribute deve essere un array.',
    'before' => 'L\'attributo :attribute dovrebbe essere una data prima a :date.',
    'before_or_equal' => 'L\'attributo :attribute dovrebbe essere una data prima o uguale a :date.',
    'between' => [
        'numeric' => 'L\'attributo :attribute deve essere compreso tra :min e :max.',
        'file' => 'L\'attributo :attribute deve essere compreso tra :min e :max kilobyte.',
        'string' => 'L\'attributo :attribute deve essere compreso tra :min e :max caratteri.',
        'array' => 'Il campo :attribute deve avere tra :min e :max elementi.',
    ],
    'boolean' => 'Il campo :attribute deve essere vero o falso.',
    'confirmed' => 'La conferma :attribute non corrisponde.',
    'current_password' => 'La password è sbagliata.',
    'date' => 'L\'attributo :attribute non è una data valida.',
    'date_equals' => 'L\'attributo :attribute dovrebbe essere una data uguale a :date.',
    'date_format' => 'Il campo :attribute non corrisponde al formato :format.',
    'different' => 'Il campo :attribute e :other devono essere diversi.',
    'digits' => 'L\'attributo :attribute deve contenere :digits cifre.',
    'digits_between' => 'L\'attributo :attribute deve essere compreso tra :min e :max cifre.',
    'dimensions' => 'L\'attributo :attribute ha dimensioni dell\'immagine non valide.',
    'distinct' => 'Il campo :attribute ha un valore duplicato.',
    'email' => 'L\'attributo :attribute deve essere un indirizzo email valido.',
    'ends_with' => 'L\'attributo :attribute deve terminare con uno dei seguenti: :values.',
    'exists' => 'Il campo :attribute selezionato non è valido.',
    'file' => 'Il campo :attribute deve essere un file.',
    'filled' => 'Il campo :attribute deve avere un valore.',
    'gt' => [
        'numeric' => 'L\'attributo :attribute deve essere maggiore di :value.',
        'file' => 'L\'attributo :attribute deve essere maggiore di :value kilobytes.',
        'string' => 'L\'attributo :attribute deve essere maggiore di :value caratteri.',
        'array' => 'L\'attributo :attribute dovrebbe avere più di :value oggetti.',
    ],
    'gte' => [
        'numeric' => 'L\'attributo :attribute deve essere maggiore o uguale a :value.',
        'file' => 'L\'attributo :attribute deve essere maggiore o uguale a :value kilobytes.',
        'string' => 'L\'attributo :attribute deve essere maggiore o uguale a :value caratteri.',
        'array' => 'L\'attributo :attribute dovrebbe avere :value o più oggetti.',
    ],
    'image' => 'L\'attributo :attribute deve essere un\'immagine.',
    'in' => 'Il campo :attribute selezionato non è valido.',
    'in_array' => 'Il campo :attribute non esiste in :other.',
    'integer' => 'L\'attributo :attribute deve essere un numero intero.',
    'ip' => 'L\'attributo :attribute deve essere un indirizzo IP valido.',
    'ipv4' => 'L\'attributo :attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => 'L\'attributo :attribute deve essere un indirizzo IPv6 valido.',
    'json' => 'L\'attributo :attribute deve essere una stringa JSON valida.',
    'lt' => [
        'numeric' => 'L\'attributo :attribute deve essere inferiore a :value.',
        'file' => 'L\'attributo :attribute deve essere inferiore a :value kilobyte.',
        'string' => 'L\'attributo :attribute dovrebbe meno di :value caratteri.',
        'array' => 'L\'attributo :attribute dovrebbe meno di :value oggetti.',
    ],
    'lte' => [
        'numeric' => 'L\'attributo :attribute deve essere inferiore o uguale a :value.',
        'file' => 'L\'attributo :attribute deve essere inferiore o uguale a :value kilobyte.',
        'string' => 'L\'attributo :attribute deve essere inferiore o uguale a :value caratteri.',
        'array' => 'L\'attributo :attribute non dovrebbe avere più di :value oggetti.',
    ],
    'max' => [
        'numeric' => 'L\'attributo :attribute non può essere maggiore di :max.',
        'file' => 'L\'attributo :attribute non dovrebbe essere più grande di :max kilobyte.',
        'string' => 'L\'attributo :attribute non può essere maggiore di :max caratteri.',
        'array' => 'L\'attributo :attribute non dovrebbe più di :value oggetti.',
    ],
    'mimes' => 'L\'attributo :attribute deve essere un file di tipo: :values.',
    'mimetypes' => 'L\'attributo :attribute deve essere un file di tipo: :values.',
    'min' => [
        'numeric' => 'L\'attributo :attribute deve essere almeno :min.',
        'file' => 'L\'attributo :attribute dovrebbe essere di almeno :value kilobyte.',
        'string' => 'Il campo :attribute deve contenere almeno :min caratteri.',
        'array' => 'Il campo :attribute deve avere almeno :min elementi.',
    ],
    'multiple_of' => 'Il campo :attribute deve essere multiplo di :value',
    'not_in' => 'Il campo :attribute selezionato non è valido.',
    'not_regex' => 'Il formato :attribute non è valido.',
    'numeric' => 'L\'attributo :attribute deve essere un numero.',
    'password' => 'La password non è corretta.',
    'present' => 'Il campo :attribute deve essere presente.',
    'regex' => 'Il formato :attribute non è valido.',
    'required' => 'Il campo :attribute è richiesto.',
    'required_if' => 'Il campo :attribute è obbligatorio quando :other è :value.',
    'required_unless' => 'Il campo :attribute è obbligatorio a meno che :other non sia in :values.',
    'required_with' => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_with_all' => 'Il campo :attribute è obbligatorio quando :values sono presenti.',
    'required_without' => 'Il campo :attribute è obbligatorio quando :values non è presente.',
    'required_without_all' => 'Il campo :attribute è obbligatorio quando nessuno dei :values è presente.',
    'same' => 'L\'attributo :attribute e :other devono corrispondere.',
    'size' => [
        'numeric' => 'L\'attributo :attribute deve essere :size.',
        'file' => 'L\'attributo :attribute deve essere :size kilobyte.',
        'string' => 'Il campo :attribute deve contenere :size caratteri.',
        'array' => 'Il campo :attribute deve contenere :size elementi.',
    ],
    'starts_with' => 'L\'attributo :attribute deve iniziare con uno dei seguenti: :values.',
    'string' => 'L\'attributo :attribute deve essere una stringa.',
    'timezone' => 'L\'attributo :attribute deve essere una zona valida.',
    'unique' => 'Il campo :attribute è già stato utilizzato.',
    'uploaded' => 'L\'attributo :attribute non è stato caricato.',
    'url' => 'Il formato :attribute non è valido.',
    'uuid' => 'L\'attributo :attribute deve essere un UUID valido.',

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
            'rule-name' => 'messaggio-personalizzato',
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
