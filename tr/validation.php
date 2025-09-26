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

    'accepted' => ':attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL değil.',
    'after' => ':attribtute , :date tarihinden sonra bir tarih olmalıdır.',
    'after_or_equal' => ':attribute, tarihten veya sonrasına ait bir tarih olmalıdır: date.',
    'alpha' => ':attribute yalnızca harf içerebilir.',
    'alpha_dash' => ':attribute sadece harfler, rakamlar ve tirelerden oluşmalıdır.',
    'alpha_num' => ':attribute sadece harfler ve rakamlar içermelidir.',
    'array' => ':attribute dizi olmalıdır.',
    'before' => ':attribute şundan daha önceki bir tarih olmalıdır :date.',
    'before_or_equal' => ':attribute tarihi :date tarihinden önce veya tarihine eşit olmalıdır.',
    'between' => [
        'numeric' => ':attribute :min - :max arasında olmalıdır.',
        'file' => ':attribute :min - :max arasındaki kilobayt değeri olmalıdır.',
        'string' => ':attribute :min - :max arasında karakterden oluşmalıdır.',
        'array' => ': Özelliği,: min ve: max öğeleri arasında olmalıdır.',
    ],
    'boolean' => ':attribute sadece doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute doğrulama uyuşmuyor.',
    'current_password' => 'Parola hatalı.',
    'date' => ':attribute geçerli bir tarih değil.',
    'date_equals' => ':attribute şuna eşit bir tarih olmalıdır: :date.',
    'date_format' => ':attribute :format biçimi ile eşleşmiyor.',
    'different' => ':attribute ile :other birbirinden farklı olmalıdır.',
    'digits' => ':attribute :digits rakam olmalıdır.',
    'digits_between' => ':attribute, :min ve :max rakamları arasında olmalıdır.',
    'dimensions' => ':attribute görsel ölçüleri geçersiz.',
    'distinct' => ':attribute alanı yinelenen bir değere sahip.',
    'email' => ':attribute geçerli bir e-posta adresi olmak zorundadır.',
    'ends_with' => ':attribute şunlardan biriyle bitmelidir: :values.',
    'exists' => 'Seçilen :attribute geçersiz.',
    'file' => ':attribute dosya olmalıdır.',
    'filled' => ':attribute alanı bir değere sahip olmak zorunda.',
    'gt' => [
        'numeric' => ':attribute, :value değerinden büyük olmak zorundadır.',
        'file' => ':attribute, :value kilobayttan fazla olmalıdır.',
        'string' => ':attribute, :value karakterden fazla olmalıdır.',
        'array' => ':attribute, :value öğeden fazla öğe içermelidir.',
    ],
    'gte' => [
        'numeric' => ':attribute, :value değerinden büyük veya bu değere eşit olmalıdır.',
        'file' => ':attribute, :value kilobayttan fazla veya bu değere eşit olmalıdır.',
        'string' => ':attribute, :value karakterden fazla veya eşit olmak zorundadır.',
        'array' => ':attribute, :value veya daha fazla öğe içermelidir.',
    ],
    'image' => ':attribute bir görüntü olması gerekir.',
    'in' => 'Seçilen :attribute geçersiz.',
    'in_array' => ':attribute alanı :other içinde mevcut değil.',
    'integer' => ':attribute tamsayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON değişkeni olmalıdır.',
    'lt' => [
        'numeric' => ':attribute şu değerden küçük olmalıdır: :value.',
        'file' => ':attribute, :value kilobayttan küçük olmalıdır.',
        'string' => ':attribute, :value karakterden az olmak zorundadır.',
        'array' => ':attribute, :value öğeden daha azına sahip olmak zorundadır.',
    ],
    'lte' => [
        'numeric' => ':attribute, :value değerinden küçük veya ona eşit olmalıdır.',
        'file' => ':attribute, :value kilobayttan az veya bu değere eşit olmalıdır.',
        'string' => ':attribute, :value karakterlerinden küçük veya ona eşit olmalıdır.',
        'array' => ':attribute, :value öğeden fazla öğe içermemelidir.',
    ],
    'max' => [
        'numeric' => ':attribute, :max değerinden fazla olamaz.',
        'file' => ':attribute, :max kilobayttan fazla olamaz.',
        'string' => ':attribute :max karakterden büyük olamaz.',
        'array' => ':attribute, :max öğeden fazlasına sahip olamaz.',
    ],
    'mimes' => ':attribute, şöyle türde bir dosya olmak zorundadır: :values.',
    'mimetypes' => ':attribute, şöyle türde bir dosya olmak zorundadır: :values.',
    'min' => [
        'numeric' => ':attribute değeri :min değerinden büyük olmalıdır.',
        'file' => ':attribute değeri :min kilobayt değerinden büyük olmalıdır.',
        'string' => ':attribute değeri :min karakter değerinden büyük olmalıdır.',
        'array' => ':attribute en az :min öğeye sahip olmak zorundadır.',
    ],
    'multiple_of' => ':attribute, :value\'nun katı olmalıdır',
    'not_in' => 'Seçilen :attribute geçersiz.',
    'not_regex' => ':attribute formatı geçersiz.',
    'numeric' => ':attribute sayı olmalıdır.',
    'password' => 'Şifre yanlış.',
    'present' => ':attribute alanı mevcut olmalıdır.',
    'regex' => ':attribute formatı geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_if' => ':attribute alanı, :other :value değerine sahip olduğunda zorunludur.',
    'required_unless' => ':attribute alanı, :other :values değerine sahip olmadığı sürece zorunludur.',
    'required_with' => ':attribute alanı :values varken zorunludur.',
    'required_with_all' => ':attribute alanı herhangi bir :values değeri varken zorunludur.',
    'required_without' => ':attribute alanı :values yokken zorunludur.',
    'required_without_all' => ':attribute alanı :values değerlerinden herhangi biri yokken zorunludur.',
    'same' => ':attribute ve :other aynı olmalı.',
    'size' => [
        'numeric' => ':attribute :size olmalı.',
        'file' => ':attribute :size kilobayt olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
        'array' => ':attribute, :size öğe içermek zorundadır.',
    ],
    'starts_with' => ':attribute şunlardan biriyle başlamalıdır: :values.',
    'string' => ':attribute dize olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute zaten alınmış.',
    'uploaded' => ':attribute yüklemesi başarısız oldu.',
    'url' => ':attribute formatı geçersiz.',
    'uuid' => ':attribute geçerli bir UUID olmalıdır.',

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
            'rule-name' => 'özel-mesaj',
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
