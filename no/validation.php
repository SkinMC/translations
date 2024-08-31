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

    'accepted' => 'Attributtet :attribute må velges.',
    'active_url' => ':attribute er ikke en gyldig URL.',
    'after' => ':attribute må være en dato etter :date.',
    'after_or_equal' => 'Attributtet :attribute må være en dato etter eller lik :date.',
    'alpha' => ':attribute kan kun inneholde bokstaver.',
    'alpha_dash' => 'Attributtet :attribute kan kun inneholde bokstaver, tall, bindestrek og understrek.',
    'alpha_num' => ':attribute kan bare inneholde bokstaver og tall.',
    'array' => ':attribute må være en matrise.',
    'before' => ':attribute må være en dato før :date.',
    'before_or_equal' => 'Attributtet :attribute må være en dato før eller lik :date.',
    'between' => [
        'numeric' => 'Attributtet :attribute må være mellom :min og :max.',
        'file' => ':attribute må være mellom :min og :max tegn.',
        'string' => ':attribute må være mellom :min og :max tegn.',
        'array' => 'Attributtet må ha mellom: min og: maks elementer.',
    ],
    'boolean' => ':attribute må være sann eller usann.',
    'confirmed' => 'Bekreftelse på attributtet :attribute stemmer ikke.',
    'current_password' => 'The password is incorrect.',
    'date' => ':attribute er ikke en gyldig dato.',
    'date_equals' => ':attribute må være en dato lik :date.',
    'date_format' => ':attribute samsvarer ikke med formatet :format.',
    'different' => 'Attributtet :attribute og :other er forskjellige.',
    'digits' => 'Attributtet :attribute må være :digits sifre.',
    'digits_between' => 'Attributtet :attribute må være mellom :min og :max sifre.',
    'dimensions' => 'Attributtet har ugyldige bildedimensjoner.',
    'distinct' => ':attribute feltet har en duplisert verdi.',
    'email' => 'Attributtet :attribute må være en gyldig e-postadresse.',
    'ends_with' => ':attribute må avsluttes med en av følgende: :values.',
    'exists' => 'Valgt attributt :attribute er ugyldig.',
    'file' => ':attribute må være en fil.',
    'filled' => 'Den :attribute må ha en verdi.',
    'gt' => [
        'numeric' => ':attribute må være større enn :value.',
        'file' => ':attribute må være større enn :value kilobytes.',
        'string' => ':attribute må være større enn :value tegn.',
        'array' => ':attribute må inneholde mer enn :value elementer.',
    ],
    'gte' => [
        'numeric' => ':attribute må være større enn eller lik: verdi.',
        'file' => ':attribute må være større enn eller lik: verdi kilobytes.',
        'string' => 'Attributtet :attribute må være større enn eller like: verdi tegn.',
        'array' => 'Attributtet :attribute må ha :value items eller mer.',
    ],
    'image' => ':attribute må være et bilde.',
    'in' => 'Valgt attributt :attribute er ugyldig.',
    'in_array' => ':attribute feltet finnes ikke i :other.',
    'integer' => ':attribute må være et heltall.',
    'ip' => 'Attributtet :attribute må være en gyldig IP-adresse.',
    'ipv4' => 'Attributtet :attribute må være en gyldig IPv4-adresse.',
    'ipv6' => 'Attributtet :attribute må være en gyldig IPv6-adresse.',
    'json' => ':attribute må være en gyldig JSON-streng.',
    'lt' => [
        'numeric' => ':attribute må være mindre enn :value.',
        'file' => ':attribute må være mindre enn :value kilobytes.',
        'string' => ':attribute må være mindre enn :value tegn.',
        'array' => ':attribute må inneholde mindre enn :value elementer.',
    ],
    'lte' => [
        'numeric' => ':attribute må være mindre enn eller lik: verdi.',
        'file' => ':attribute må være mindre enn eller lik: verdi kilobytes.',
        'string' => 'Attributtet :attribute må være mindre eller lik: verdi tegn.',
        'array' => ':attribute må ikke inneholde mer enn :value elementer.',
    ],
    'max' => [
        'numeric' => 'Attributtet :attribute kan ikke være større enn :max.',
        'file' => 'Attributtet :attribute kan ikke være større enn :max kilobytes.',
        'string' => ':attribute kan ikke være større enn :max tegn.',
        'array' => ':attribute kan ikke inneholde mer enn :max elementer.',
    ],
    'mimes' => 'Attributtet :attribute må være en fil av typen: :values.',
    'mimetypes' => 'Attributtet :attribute må være en fil av typen: :values.',
    'min' => [
        'numeric' => ':attribute må være minst :min.',
        'file' => ':attribute må være minst :min kilobytes.',
        'string' => ':attribute må ha minst :min tegn.',
        'array' => 'Attributtet må ha minst: min elementer.',
    ],
    'multiple_of' => ':attribute må være en rekke av :value',
    'not_in' => 'Valgt attributt :attribute er ugyldig.',
    'not_regex' => 'Attributt-formatet :attribute er ugyldig.',
    'numeric' => 'Attributtet :attribute må være et nummer.',
    'password' => 'Passordet er feil.',
    'present' => 'Atributtfeltet :attribute må ha en verdi.',
    'regex' => 'Attributt-formatet :attribute er ugyldig.',
    'required' => 'Attributt-feltet :attribute er påkrevd.',
    'required_if' => 'Attributt-feltet :attribute er påkrevd når :other er :value.',
    'required_unless' => 'Attributtfeltet kreves med mindre: annet er i: verdier.',
    'required_with' => 'Attributt-feltet :attribute er påkrevd når :values er tilstede.',
    'required_with_all' => 'Attributt-feltet :attribute er påkrevd når :values er tilstede.',
    'required_without' => 'Attributt-feltet :attribute er påkrevd når :values ikke er tilstede.',
    'required_without_all' => 'Attributtfeltet kreves når ingen av: verdiene er til stede.',
    'same' => ':attribute og :other må være like.',
    'size' => [
        'numeric' => 'Attributtet :attribute må være :size.',
        'file' => ':attribute må være :size kilobytes.',
        'string' => 'Attributtet :attribute må være :size tegn.',
        'array' => ':attribute må inneholde :size elementer.',
    ],
    'starts_with' => ':attribute må starte med en av følgende: :values.',
    'string' => ':attribute må være en tekst.',
    'timezone' => 'Attributtet må være en gyldig sone.',
    'unique' => 'Attributtet :attribute er allerede tatt.',
    'uploaded' => 'Attributtet :attribute kunne ikke lastes opp.',
    'url' => 'Attributt-formatet :attribute er ugyldig.',
    'uuid' => ':attribute må være en gyldig UUID.',

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
            'rule-name' => 'egenvalgt melding',
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
