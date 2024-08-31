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

    'accepted' => 'A(z) :attribute-t el kell fogadni!',
    'active_url' => 'A(z) :attribute-mezőben megadott hivatkozás érvénytelen!',
    'after' => 'A(z) :attribute-mezőben megadott dátumnak :date utáninak kell lennie!',
    'after_or_equal' => 'A(z) :attribute-mezőben megadott dátumnak :date-nak, vagy az utáninak kell lennie!',
    'alpha' => 'A(z) :attribute-mezőben csak betűket adhatsz meg!',
    'alpha_dash' => 'A(z) :attribute-mezőben csak betűket, számokat, kötőjeleket és alulvonásokat adhatsz meg!',
    'alpha_num' => 'A(z) :attribute-mezőben csak betűket és számokat adhatsz meg!',
    'array' => 'A(z) :attribute-mezőben csak tömböt adhatsz meg!',
    'before' => 'A(z) :attribute-mezőben megadott dátumnak :date előttinek kell lennie!',
    'before_or_equal' => 'A(z) :attribute-mezőben megadott dátumnak :date-nak, vagy az előttinek kell lennie!',
    'between' => [
        'numeric' => 'A(z) :attribute-mezőben megadott számnak :min és :max közöttinek kell lennie!',
        'file' => 'A(z) :attribute-mezőben társított fájlnak :min és :max kilobájt között kell lennie!',
        'string' => 'A(z) :attribute-mezőben megadott szövegnek :min és :max karakter között kell lennie!',
        'array' => 'A(z) :attribute-mezőben :min—:max elemnek kell lennie!',
    ],
    'boolean' => 'A(z) :attribute-mező értéke igaz vagy hamis kell, hogy legyen!',
    'confirmed' => 'A(z) :attribute-mező nem egyezik az ellenőrzőértékkel!',
    'current_password' => 'A megadott jelszó helytelen!',
    'date' => 'A(z) :attribute-mezőben megadott dátum érvénytelen!',
    'date_equals' => 'A(z) :attribute-mezőben megadott dátumnak az alábbinak kell lennie: :date!',
    'date_format' => 'A(z) :attribute-mezőben megadott értéknek egyeznie kell az alábbi formátummal: :format!',
    'different' => 'A(z) :attribute és :other mezőkben megadott értékeknek különböznie kell!',
    'digits' => 'A(z) :attribute-mezőben megadott értéknek :digits-számjegy hosszúnak kell lennie!',
    'digits_between' => 'A(z) :attribute-mezőben megadott számnak :min—:max-számjegy hosszúnak kell lennie!',
    'dimensions' => 'A(z) :attribute képmérete nem megfelelő!',
    'distinct' => 'A(z) :attribute-mezőben megadott értéknek egyedinek kell lennie!',
    'email' => 'A(z) :attribute-mezőben megadott email cím helytelen!',
    'ends_with' => 'A(z) :attribute-mezőben megadott értéknek az alábbi karakterek egyikével kell végződnie: :values!',
    'exists' => 'A kijelölt :attribute érvénytelen!',
    'file' => 'A(z) :attribute-mezőben társított elemnek fájlnak kell lennie!',
    'filled' => 'A(z) :attribute-mező nem lehet üres!',
    'gt' => [
        'numeric' => 'A(z) :attribute-mezőben megadott érték nem lehet nagyobb, mint :value!',
        'file' => 'A(z) :attribute mérete nem lehet nagyobb, mint :value kilobájt!',
        'string' => 'A(z) :attribute-mezőben megadott értéknek hosszabbnak kell lennie :value karakternél!',
        'array' => 'A(z) :attribute-mezőnek több, mint :value elemet kell tartalmaznia!',
    ],
    'gte' => [
        'numeric' => 'A(z) :attribute-mezőben megadott értéknek nagyobbnak vagy egyenlőnek kell lennie ezzel: :value!',
        'file' => 'A(z) :attribute mérete nagyobbnak vagy egyenlőnek kell lennie :value kilobájttal!',
        'string' => 'A(z) :attribute-mezőben megadott értéknek hosszabbnak vagy egyenlőnek kell lennie :value karakterrel!',
        'array' => 'A(z) :attribute-mezőnek legalább :value elemet kell tartalmaznia!',
    ],
    'image' => 'A(z) :attribute csak kép lehet!',
    'in' => 'A kijelölt :attribute érvénytelen!',
    'in_array' => 'A(z) :attribute-mezőben megadott érték nem található a(z) :other értékek között!',
    'integer' => 'A(z) :attribute-mezőben megadott érték csak szám lehet!',
    'ip' => 'A(z) :attribute-mezőben megadott érték csak érvényes IP-cím lehet!',
    'ipv4' => 'A(z) :attribute-mezőben megadott érték csak érvényes IPv4-cím lehet!',
    'ipv6' => 'A(z) :attribute-mezőben megadott érték csak érvényes IPv6-cím lehet!',
    'json' => 'A(z) :attribute-mezőben megadott érték csak egy érvényes JSON-karakterlánc lehet!',
    'lt' => [
        'numeric' => 'A(z) :attribute-mezőben megadott értéknek kisebbnek kell lennie ennél: :value!',
        'file' => 'A(z) :attribute nem lehet nagyobb :value kilobájtnál!',
        'string' => 'A(z) :attribute-mezőben megadott érték nem lehet hosszabb :value karakternél!',
        'array' => 'A(z) :attribute-tömb nem tartalmazhat több, mint :value elemet!',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'multiple_of' => 'The :attribute must be a multiple of :value',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

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
            'rule-name' => 'custom-message',
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
