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

    'accepted' => ':attribute moet geaccepteerd worden.',
    'active_url' => ':attribute is geen geldige URL.',
    'after' => ':attribute moet een datum zijn na :date.',
    'after_or_equal' => ':attribute moet een datum zijn later dan of gelijk aan :date.',
    'alpha' => ':attribute mag alleen letters bevatten.',
    'alpha_dash' => ':attribute mag alleen letters, nummers, underscores en streepjes bevatten.',
    'alpha_num' => ':attribute mag alleen letters en nummers bevatten.',
    'array' => ':attribute moet een array zijn.',
    'before' => ':attribute moet een datum voor :date zijn.',
    'before_or_equal' => ':attribute moet een datum zijn voor of gelijk aan :date.',
    'between' => [
        'numeric' => ':attribute moet tussen :min en :max zijn.',
        'file' => ':attribute moet tussen :min en :max kilobytes zijn.',
        'string' => ':attribute moet tussen :min en :max karakters zijn.',
        'array' => ':attribute moet tussen de :min en :max items bevatten.',
    ],
    'boolean' => ':attribute moet waar of niet waar zijn.',
    'confirmed' => ':attribute bevestiging komt niet overeen.',
    'current_password' => 'Het wachtwoord is onjuist.',
    'date' => ':attribute is geen geldige datum.',
    'date_equals' => ':attribute moet een datum gelijk aan :date zijn.',
    'date_format' => ':attribute komt niet overeen met het volgende formaat :format.',
    'different' => ':attribute en :other moeten verschillend zijn.',
    'digits' => ':attribute moet bestaan uit :digits cijfers.',
    'digits_between' => ':attribute moet tussen de :min en :max cijfers bevatten.',
    'dimensions' => ':attribute heeft ongeldige afbeelding afmetingen.',
    'distinct' => ':attribute heeft een dubbele waarde.',
    'email' => ':attribute moet een geldig e-mailadres zijn.',
    'ends_with' => ':attribute moet met één van de volgende waarden eindigen: :values.',
    'exists' => 'De geselecteerde :attribute is ongeldig.',
    'file' => ':attribute moet een bestand zijn.',
    'filled' => ':attribute is verplicht een waarde te hebben.',
    'gt' => [
        'numeric' => ':attribute moet groter zijn dan :value.',
        'file' => ':attribute moet groter zijn dan :value kilobytes.',
        'string' => ':attribute moet meer dan :value karakters bevatten.',
        'array' => ':attribute moet meer dan :value items bevatten.',
    ],
    'gte' => [
        'numeric' => ':attribute moet groter of gelijk zijn aan :value.',
        'file' => ':attribute moet groter of gelijk zijn aan :value kilobytes.',
        'string' => ':attribute moet :value karakters of meer bevatten.',
        'array' => ':attribute moet :value items of meer bevatten.',
    ],
    'image' => ':attribute moet een afbeelding zijn.',
    'in' => 'De geselecteerde :attribute is ongeldig.',
    'in_array' => ':attribute veld bestaat niet in :other.',
    'integer' => ':attribute moet een getal zijn.',
    'ip' => ':attribute moet een geldig IP-adres zijn.',
    'ipv4' => ':attribute moet een geldig IPv4-adres zijn.',
    'ipv6' => ':attribute moet een geldig IPv6-adres zijn.',
    'json' => ':attribute moet een geldige JSON string zijn.',
    'lt' => [
        'numeric' => ':attribute moet kleiner zijn dan :value.',
        'file' => ':attribute moet kleiner zijn dan :value kilobytes.',
        'string' => ':attribute moet minder dan :value karakters bevatten.',
        'array' => ':attribute moet minder dan :value items bevatten.',
    ],
    'lte' => [
        'numeric' => ':attribute moet kleiner of gelijk zijn aan :value.',
        'file' => ':attribute moet kleiner of gelijk zijn aan :value kilobytes.',
        'string' => ':attribute moet :value karakters of minder bevatten.',
        'array' => ':attribute mag niet meer dan :value items bevatten.',
    ],
    'max' => [
        'numeric' => ':attribute mag niet hoger dan :max zijn.',
        'file' => ':attribute mag niet meer dan :max kilobytes zijn.',
        'string' => ':attribute mag niet langer zijn dan :max karakters.',
        'array' => ':attribute mag niet meer dan :max items bevatten.',
    ],
    'mimes' => ':attribute moet een bestand zijn van het bestandstype :values.',
    'mimetypes' => ':attribute moet een bestand zijn van het bestandstype :values.',
    'min' => [
        'numeric' => ':attribute moet minstens :min zijn.',
        'file' => ':attribute moet minstens :min kilobytes zijn.',
        'string' => ':attribute moet tenminste :min karakters bevatten.',
        'array' => ':attribute moet minstens :min items bevatten.',
    ],
    'multiple_of' => ':attribute moet een veelvoud zijn van :value',
    'not_in' => 'De geselecteerde :attribute is ongeldig.',
    'not_regex' => ':attribute formaat is ongeldig.',
    'numeric' => ':attribute moet een getal zijn.',
    'password' => 'Het wachtwoord is onjuist.',
    'present' => ':attribute veld moet aanwezig zijn.',
    'regex' => ':attribute formaat is ongeldig.',
    'required' => ':attribute veld is verplicht.',
    'required_if' => ':attribute veld is verplicht wanneer :other :value is.',
    'required_unless' => ':attribute is verplicht tenzij :other gelijk is aan :values.',
    'required_with' => ':attribute veld is verplicht wanneer :values aanwezig is.',
    'required_with_all' => ':attribute veld is verplicht wanneer :values aanwezig is.',
    'required_without' => ':attribute veld is verplicht wanneer :values niet aanwezig is.',
    'required_without_all' => ':attribute veld is vereist wanneer geen van :values aanwezig zijn.',
    'same' => ':attribute en :other moeten overeenkomen.',
    'size' => [
        'numeric' => ':attribute moet :size zijn.',
        'file' => ':attribute moet :size kilobytes zijn.',
        'string' => ':attribute moet :size karakters zijn.',
        'array' => ':attribute moet :size items bevatten.',
    ],
    'starts_with' => ':attribute moet starten met een van de volgende: :values.',
    'string' => ':attribute moet een tekenreeks zijn.',
    'timezone' => ':attribute moet een geldige zone zijn.',
    'unique' => ':attribute is al in gebruik.',
    'uploaded' => 'Het uploaden van :attribute is mislukt.',
    'url' => ':attribute formaat is ongeldig.',
    'uuid' => ':attribute moet een geldig UUID zijn.',

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
            'rule-name' => 'aangepast bericht',
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
