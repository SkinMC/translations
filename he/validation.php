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

    'accepted' => 'ה :attribute חייב להיות מקובל.',
    'active_url' => 'ה :attribute אינו כתובת URL חוקי.',
    'after' => 'ה :attribute חייב להיות לאחר התאריך :date.',
    'after_or_equal' => 'ה :attribute חייב להיות תאריך לאחר או שווה ל :date.',
    'alpha' => 'ה :attribute צריך להכיל רק אותיות.',
    'alpha_dash' => 'ה :attribute חייב להכיל רק אותיות, מספרים ומקפים.',
    'alpha_num' => 'ה :attribute חייב להכיל רק אותיות ומספרים.',
    'array' => 'ה :attribute חייב להיות מערך.',
    'before' => 'ה :attribute חייב להיות תאריך לפני :date.',
    'before_or_equal' => 'ה :attribute חייב להיות תאריך מוקדם או שווה ל :date.',
    'between' => [
        'numeric' => ':attribute חייב להיות בין :min לבין :max.',
        'file' => ':attribute חייב להיות בין :min ל-:max קילובייטים.',
        'string' => ':attribute חייב להיות בין :min לבין :max תווים.',
        'array' => ':attribute חייב להכיל בין :min ל-:max פריטים.',
    ],
    'boolean' => 'השדה :attribute חייב להיות נכון או לא נכון.',
    'confirmed' => 'האימות של :attribute לא תואם.',
    'current_password' => 'הסיסמא אינה נכונה.',
    'date' => ':attribute אינו תאריך חוקי.',
    'date_equals' => 'ה :attribute צריך להיות תאריך שווה ל :date.',
    'date_format' => ':attribute לא תואם את המבנה :format.',
    'different' => ':attribute ו- :other חייבים להיות שונים זה מזה.',
    'digits' => ':attribute חייב להיות באורך :digits ספרות.',
    'digits_between' => ':attribute חייב להיות בין :min ל־:max ספרות.',
    'dimensions' => 'מימדי התמונה לא תקינים ב- :attribute ',
    'distinct' => 'ב- :attribute קיים ערך כפול.',
    'email' => ':attribute חייב להיות כתובת דוא״ל תקנית.',
    'ends_with' => ':attribute חייב להסתיים באחד מהבאים: :values.',
    'exists' => 'ה- :attribute שנבחר אינו תקין.',
    'file' => ':attribute חייב להיות קובץ.',
    'filled' => ':attribute חייב להכיל ערך.',
    'gt' => [
        'numeric' => 'ה- :attribute חייב להיות גדול יותר מ- :value.',
        'file' => 'ה- :attribute חייב להיות גדול יותר מ- :value קילו-בתים.',
        'string' => 'על ה :attribute להיות גדול יותר מ- :value תווים.',
        'array' => 'ה :attribute חייב לכלול יותר מ- :value פריטים.',
    ],
    'gte' => [
        'numeric' => 'ה :attribute חייב להיות גדול יותר או שווה ל :value.',
        'file' => 'ה :attribute חייב להיות גדול יותר או שווה ל :value קילו-בייתים.',
        'string' => 'ה :attribute חייב להיות גדול יותר או שווה ל :value תווים.',
        'array' => 'ה :attribute חייב לכלול :value פריטים או יותר.',
    ],
    'image' => 'ה :attribute חייב להיות תמונה.',
    'in' => 'ה :attribute שנבחר אינו תקין.',
    'in_array' => 'ה :attribute לא קיים ב :other.',
    'integer' => 'ה :attribute חייב להיות מספר שלם.',
    'ip' => 'ה :attribute חייב להיות כתובת IP חוקית.',
    'ipv4' => 'ה :attribute חייב להיות כתובת IPv4 חוקית.',
    'ipv6' => 'ה :attribute חייב להיות כתובת IPv6 חוקית.',
    'json' => 'ה :attribute חייב להיות מחרוזת JSON חוקית.',
    'lt' => [
        'numeric' => 'ה :attribute חייב להיות קטן יותר מ :value.',
        'file' => 'ה :attribute חייב להיות קטן יותר מ :value קילובייתים.',
        'string' => 'ה :attribute חייב להכיל פחות מ :value תווים.',
        'array' => 'ה :attribute חייב להכיל פחות מ :value פריטים.',
    ],
    'lte' => [
        'numeric' => 'ה :attribute חייב להיות נמוך מ- או שווה ל- :value.',
        'file' => 'ה :attribute חייב להיות קטן יותר מ- או שווה ל- :value קילו-בייתים.',
        'string' => 'ה :attribute חייב להכיל :value תווים או פחות.',
        'array' => 'ה :attribute חייב להכיל לא יותר מאשר :value פריטים.',
    ],
    'max' => [
        'numeric' => 'ה :attribute חייב לא להיות יותר גדול מ :max.',
        'file' => 'ה :attribute חייב לא להיות גדול יותר מ :max קילובייתים.',
        'string' => 'ה :attribute חייב לא להיות גדול מ :max תווים.',
        'array' => 'ה :attribute חייב לא להכיל יותר מ :max פריטים.',
    ],
    'mimes' => 'ה :attribute חייב להיות קובץ מסוג: :values.',
    'mimetypes' => 'ה :attribute חייב להיות קובץ מסוג: :values.',
    'min' => [
        'numeric' => 'ה :attribute חייב להיות לפחות :min.',
        'file' => 'ה :attribute חייב לשקול לפחות :min קילובייתים.',
        'string' => 'ה :attribute חייב להיות באורך של לפחות :min תווים.',
        'array' => 'ה :attribute חייב להיות לפחות :min פריטים.',
    ],
    'multiple_of' => 'ה :attribute חייב להיות שכפול של :value',
    'not_in' => 'ה :attribute שנבחר אינו תקין.',
    'not_regex' => 'המבנה של :attribute אינו חוקי.',
    'numeric' => 'ה :attribute חייב להיות מספר.',
    'password' => 'הסיסמא אינה נכונה.',
    'present' => 'ה :attribute חייב להיות קיים.',
    'regex' => 'המבנה של :attribute אינו חוקי.',
    'required' => 'שדה ה :attribute הוא חובה.',
    'required_if' => 'שדה ה :attribute נחוץ כאשר :other הוא :value.',
    'required_unless' => 'שדה ה :attribute נחוץ אלא אם כן :other הוא בין :values.',
    'required_with' => 'שדה ה :attribute נחוץ כאשר :values קיים.',
    'required_with_all' => 'שדה ה :attribute נחוץ כאשר :values קיימים.',
    'required_without' => 'שדה ה :attribute נחוץ כאשר :values לא נמצא.',
    'required_without_all' => 'שדה ה :attribute נחוץ כאשר אף אחד מבין :values קיים \ קיימים.',
    'same' => 'ה :attribute וגם :other חייבים להיות זהים.',
    'size' => [
        'numeric' => 'ה :attribute חייב לשקול :size.',
        'file' => 'ה :attribute חייב לשקול :size קילובייטים.',
        'string' => 'ה :attribute חייב להיות באורך של :size תווים.',
        'array' => 'ה :attribute חייב להכיל :size פריטים.',
    ],
    'starts_with' => 'ה :attribute חייב להתחיל עם אחד מהבאים: :values.',
    'string' => 'ה :attribute חייב להיות מחרוזת.',
    'timezone' => 'ה :attribute חייב להיות איזור חוקי.',
    'unique' => 'ה :attribute כבר נתפס.',
    'uploaded' => 'תהליך ההעלאה ב :attribute נכשל.',
    'url' => 'המבנה של :attribute אינו חוקי.',
    'uuid' => 'ה :attribute חייב להיות UUID חוקי.',

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
            'rule-name' => 'הודעה-אישית',
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
