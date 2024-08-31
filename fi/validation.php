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

    'accepted' => 'Määrite :attribute on hyväksyttävä.',
    'active_url' => 'Määrite :attribute ei ole kelvollinen URL.',
    'after' => 'Kentän :attribute arvon on oltava päivämäärä :date jälkeen.',
    'after_or_equal' => 'Kentän :attribute päiväyksen tulee olla yhtä suuri tai seuraavista: päivämäärä.',
    'alpha' => 'Kentän :attribute arvo voi sisältää vain kirjaimia.',
    'alpha_dash' => 'Kentän :attribute arvo voi sisältää vain kirjaimia, numeroita, väliviivoja ja alaviivoja.',
    'alpha_num' => 'Kentän :attribute arvo voi sisältää vain kirjaimia ja numeroita.',
    'array' => 'Kentän :attribute arvon on oltava taulukko.',
    'before' => 'Kentän :attribute päiväyksen on oltava ennen :date.',
    'before_or_equal' => 'Kentän :attribute päiväyksen on oltava ennen tai yhtä suuri kuin :date.',
    'between' => [
        'numeric' => 'Kentän :attribute tulee olla välillä :min ja :max.',
        'file' => 'Kentän :attribute tulee olla :min ja :max kilotavua.',
        'string' => 'Kentän :attribute arvon tulee olla :min - :max merkkiä pitkä.',
        'array' => 'Kentän :attribute tulee olla välillä :min ja :max kohteita.',
    ],
    'boolean' => 'Kentän :attribute arvon on oltava tosi tai epätosi.',
    'confirmed' => 'Määritteen :attribute vahvistus ei täsmää.',
    'current_password' => 'The password is incorrect.',
    'date' => 'Määrite :attribute ei ole kelvollinen päivämäärä.',
    'date_equals' => 'Kentän :attribute päivämäärän on oltava yhtä suuri kuin :date.',
    'date_format' => 'Kentän :attribute arvo ei vastaa muotoa :format.',
    'different' => 'Määritteen :attribute ja :other on oltava erilainen.',
    'digits' => 'Kentän :attribute arvon on oltava :digits numeroa.',
    'digits_between' => 'Kentän :attribute arvon on oltava :min - :max numeroa.',
    'dimensions' => 'Kentän :attribute kuvan mitat ovat virheelliset.',
    'distinct' => 'Kentän :attribute arvo on kaksoiskappale.',
    'email' => 'Kentän :attribute arvon tulee olla kelvollinen sähköpostiosoite.',
    'ends_with' => 'Kentän :attribute arvon tulee päättyä johonkin seuraavista: :values.',
    'exists' => 'Valittu :attribute on virheellinen.',
    'file' => 'Kentän :attribute arvon on oltava tiedosto.',
    'filled' => 'Kentän :attribute arvolla on oltava arvo.',
    'gt' => [
        'numeric' => 'Kentän :attribute arvon on oltava suurempi kuin :value.',
        'file' => 'Kentän :attribute arvon on oltava suurempi kuin :value kilotavut.',
        'string' => 'Kentän :attribute arvon on oltava suurempi kuin :value merkkiä.',
        'array' => 'Kentän :attribute arvon tulee olla enemmän kuin :value kohteet.',
    ],
    'gte' => [
        'numeric' => 'Kentän :attribute arvon on oltava suurempi tai yhtä suuri :value.',
        'file' => 'Kentän :attribute arvon on oltava suurempi tai yhtä suuri :value kilotavua.',
        'string' => 'Kentän :attribute arvon on oltava suurempi tai yhtä suuri :value merkkiä.',
        'array' => 'Kentän :attribute tulee olla :value items tai enemmän.',
    ],
    'image' => 'Kentän :attribute arvon on oltava kuva.',
    'in' => 'Valittu :attribute on virheellinen.',
    'in_array' => 'Attribuutti-kenttää ei ole olemassa :other.',
    'integer' => 'Kentän :attribute arvon on oltava kokonaisluku.',
    'ip' => 'Kentän :attribute arvon on oltava kelvollinen IP-osoite.',
    'ipv4' => 'Kentän :attribute arvon on oltava kelvollinen IPv4-osoite.',
    'ipv6' => 'Kentän :attribute arvon on oltava kelvollinen IPv6-osoite.',
    'json' => 'Kentän :attribute arvon on oltava kelvollinen JSON merkkijono.',
    'lt' => [
        'numeric' => 'Kentän :attribute arvon on oltava pienempi kuin :value.',
        'file' => 'Kentän :attribute arvon on oltava pienempi kuin :value kilotavut.',
        'string' => 'Kentän :attribute arvon on oltava pienempi kuin :value merkki.',
        'array' => 'Kentän :attribute arvon on oltava pienempi kuin :value kohteet.',
    ],
    'lte' => [
        'numeric' => 'Kentän :attribute arvon on oltava pienempi tai yhtä suuri :value.',
        'file' => 'Kentän :attribute arvon on oltava pienempi tai yhtä suuri :value kilotavua.',
        'string' => 'Kentän :attribute arvon on oltava pienempi tai yhtä suuri :value merkkiä.',
        'array' => 'Kentän :attribute arvo saa olla enintään :value kohteita.',
    ],
    'max' => [
        'numeric' => 'Kentän :attribute arvo ei saa olla suurempi kuin :max.',
        'file' => 'Kentän :attribute arvo ei saa olla suurempi kuin :max kilotavua.',
        'string' => 'Kentän :attribute arvo ei saa olla suurempi kuin :max merkkiä.',
        'array' => 'Attribuutilla ei saa olla enempää kuin :max kohteita.',
    ],
    'mimes' => 'Kentän :attribute arvon on oltava tyyppi: :values.',
    'mimetypes' => 'Kentän :attribute arvon on oltava tyyppi: :values.',
    'min' => [
        'numeric' => 'Kentän :attribute arvon on oltava vähintään :min.',
        'file' => 'Kentän :attribute arvon on oltava vähintään :min kilotavua.',
        'string' => 'Kentän :attribute arvon on oltava vähintään :min merkkiä.',
        'array' => 'Kentän :attribute tulee sisältää vähintään :min kohteita.',
    ],
    'multiple_of' => 'Kentän :attribute arvon on oltava moninkertainen :value',
    'not_in' => 'Valittu :attribute on virheellinen.',
    'not_regex' => 'Määritteen :attribute muoto on virheellinen.',
    'numeric' => 'Kentän :attribute arvon on oltava numero.',
    'password' => 'Salasana on virheellinen.',
    'present' => 'Attribuuttikentän on oltava läsnä.',
    'regex' => 'Määritteen :attribute muoto on virheellinen.',
    'required' => 'Kentän :attribute arvo on pakollinen.',
    'required_if' => 'Kentän :attribute arvo vaaditaan, kun :other on :value.',
    'required_unless' => 'Kentän :attribute arvo on pakollinen, paitsi jos :other on arvoissa :values.',
    'required_with' => 'Määritekenttä :attribute vaaditaan kun arvo :values on läsnä.',
    'required_with_all' => 'Määritekenttä :attribute vaaditaan kun arvot ovat läsnä.',
    'required_without' => 'Määritekenttä :attribute vaaditaan kun arvo :values ei ole läsnä.',
    'required_without_all' => 'Määritekenttä :attribute vaaditaan kun mitään arvoista ei ole.',
    'same' => 'Kentän :attribute ja :other tulee täsmätä.',
    'size' => [
        'numeric' => 'Kentän :attribute arvon on oltava :size.',
        'file' => 'Kentän :attribute arvon on oltava kokoa :size kilobittiä.',
        'string' => 'Kentän :attribute arvon on oltava kokoa :size merkkiä.',
        'array' => 'Kentän :attribute tulee sisältää :size kohteita.',
    ],
    'starts_with' => 'Kentän :attribute tulee alkaa jollakin seuraavista: :values.',
    'string' => 'Kentän :attribute arvon on oltava merkkijono.',
    'timezone' => 'Kentän :attribute arvon on oltava kelvollinen alue.',
    'unique' => 'Kentän :attribute arvo on jo käytössä.',
    'uploaded' => 'Kentän :attribute lataaminen epäonnistui.',
    'url' => 'Määritteen :attribute muoto on virheellinen.',
    'uuid' => 'Kentän :attribute arvon on oltava kelvollinen UUID.',

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
            'rule-name' => 'räätälö-viesti',
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
