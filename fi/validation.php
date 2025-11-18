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

    'accepted' => ':attribute on hyväksyttävä.',
    'active_url' => ':attribute ei ole kelvollinen URL.',
    'after' => ':attribute on oltava päivämäärä :date jälkeen.',
    'after_or_equal' => ':attribute päiväyksen tulee olla yhtä suuri tai seuraavista: päivämäärä.',
    'alpha' => ':attribute voi sisältää vain kirjaimia.',
    'alpha_dash' => ':attribute voi sisältää vain kirjaimia, numeroita, väliviivoja ja alaviivoja.',
    'alpha_num' => ':attribute voi sisältää vain kirjaimia ja numeroita.',
    'array' => ':attribute on oltava taulukko.',
    'before' => ':attribute päiväyksen on oltava ennen :date.',
    'before_or_equal' => ':attribute päiväyksen on oltava ennen tai yhtä suuri kuin :date.',
    'between' => [
        'numeric' => ':attribute tulee olla välillä :min ja :max.',
        'file' => ':attribute tulee olla :min ja :max kilotavua.',
        'string' => ':attribute tulee olla :min - :max merkkiä pitkä.',
        'array' => ':attribute tulee olla välillä :min ja :max kohteita.',
    ],
    'boolean' => ':attribute kenttä on oltava tosi tai epätosi.',
    'confirmed' => ':attribute vahvistus ei täsmää.',
    'current_password' => 'Salasana on virheellinen.',
    'date' => ':attribute ei ole kelvollinen päivämäärä.',
    'date_equals' => ':attribute päivämäärän on oltava yhtä suuri kuin :date.',
    'date_format' => ':attribute ei vastaa muotoa :format.',
    'different' => ':attribute ja :other on oltava erilainen.',
    'digits' => ':attribute on oltava :digits numeroa.',
    'digits_between' => ':attribute on oltava :min - :max numeroa.',
    'dimensions' => ':attribute kuvan mitat ovat virheelliset.',
    'distinct' => ':attribute kentällä on kaksoiskappale.',
    'email' => ':attribute tulee olla kelvollinen sähköpostiosoite.',
    'ends_with' => ':attribute tulee päättyä johonkin seuraavista: :values.',
    'exists' => 'Valittu :attribute on virheellinen.',
    'file' => ':attribute on oltava tiedosto.',
    'filled' => ':attribute kentällä on oltava arvo.',
    'gt' => [
        'numeric' => ':attribute on oltava suurempi kuin :value.',
        'file' => ':attribute on oltava suurempi kuin :value kilotavut.',
        'string' => ':attribute on oltava suurempi kuin :value merkkiä.',
        'array' => ':attribute tulee olla enemmän kuin :value kohteet.',
    ],
    'gte' => [
        'numeric' => ':attribute on oltava suurempi tai yhtä suuri :value.',
        'file' => ':attribute on oltava suurempi tai yhtä suuri :value kilotavua.',
        'string' => ':attribute on oltava suurempi tai yhtä suuri :value merkkiä.',
        'array' => ':attribute tulee olla :value items tai enemmän.',
    ],
    'image' => ':attribute on oltava kuva.',
    'in' => 'Valittu :attribute on virheellinen.',
    'in_array' => ':attribute kenttää ei ole olemassa kohteessa :other.',
    'integer' => ':attribute on oltava kokonaisluku.',
    'ip' => ':attribute on oltava kelvollinen IP-osoite.',
    'ipv4' => ':attribute on oltava kelvollinen IPv4-osoite.',
    'ipv6' => ':attribute on oltava kelvollinen IPv6-osoite.',
    'json' => ':attribute on oltava kelvollinen JSON merkkijono.',
    'lt' => [
        'numeric' => ':attribute on oltava pienempi kuin :value.',
        'file' => ':attribute on oltava pienempi kuin :value kilotavut.',
        'string' => ':attribute on oltava pienempi kuin :value merkkiä.',
        'array' => ':attribute on oltava pienempi kuin :value kohteet.',
    ],
    'lte' => [
        'numeric' => ':attribute on oltava pienempi tai yhtä suuri :value.',
        'file' => ':attribute on oltava pienempi tai yhtä suuri :value kilotavua.',
        'string' => ':attribute on oltava pienempi tai yhtä suuri :value merkkiä.',
        'array' => ':attribute saa olla enintään :value kohteita.',
    ],
    'max' => [
        'numeric' => ':attribute ei saa olla suurempi kuin :max.',
        'file' => ':attribute ei saa olla suurempi kuin :max kilotavua.',
        'string' => ':attribute ei saa olla suurempi kuin :max merkkiä.',
        'array' => ':attribute ei saa olla enempää kuin :max kohteita.',
    ],
    'mimes' => ':attribute on oltava tyyppi: :values.',
    'mimetypes' => ':attribute on oltava tyyppi: :values.',
    'min' => [
        'numeric' => ':attribute on oltava vähintään :min.',
        'file' => ':attribute on oltava vähintään :min kilotavua.',
        'string' => ':attribute on oltava vähintään :min merkkiä.',
        'array' => ':attribute sisältää vähintään :min kohteita.',
    ],
    'multiple_of' => ':attribute on oltava moninkertainen :value',
    'not_in' => 'Valittu :attribute on virheellinen.',
    'not_regex' => ':attribute muoto on virheellinen.',
    'numeric' => ':attribute on oltava numero.',
    'password' => 'Salasana on virheellinen.',
    'present' => ':attribute kentän on oltava läsnä.',
    'regex' => ':attribute muoto on virheellinen.',
    'required' => ':attribute kenttä on pakollinen.',
    'required_if' => ':attribute kenttä vaaditaan, kun :other on :value.',
    'required_unless' => ':attribute kenttä on pakollinen, paitsi jos :other on arvoissa :values.',
    'required_with' => ':attribute kenttä vaaditaan kun arvo :values on läsnä.',
    'required_with_all' => ':attribute kenttä vaaditaan kun :values ovat läsnä.',
    'required_without' => ':attribute kenttä vaaditaan kun :values ei ole läsnä.',
    'required_without_all' => ':attribute kenttä vaaditaan kun mitään :values ei ole.',
    'same' => ':attribute ja :other tulee täsmätä.',
    'size' => [
        'numeric' => ':attribute arvon on oltava :size.',
        'file' => ':attribute arvon on oltava kokoa :size kilobittiä.',
        'string' => ':attribute on oltava kokoa :size merkkiä.',
        'array' => ':attribute tulee sisältää :size kohteita.',
    ],
    'starts_with' => ':attribute tulee alkaa jollakin seuraavista: :values.',
    'string' => ':attribute on oltava merkkijono.',
    'timezone' => ':attribute on oltava kelvollinen alue.',
    'unique' => ':attribute on jo käytössä.',
    'uploaded' => ':attribute lataaminen epäonnistui.',
    'url' => ':attribute muoto on virheellinen.',
    'uuid' => ':attribute on oltava kelvollinen UUID.',

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
            'rule-name' => 'mukautettu-viesti',
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
