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

    'accepted' => 'يجب قبول :attribute.',
    'active_url' => ':attribute ليس عنوان URL صالح.',
    'after' => 'يجب أن يكون تاريخ :attribute بعد :date.',
    'after_or_equal' => 'يجب أن يكون تاريخ :attribute بعد أو يساوي :date.',
    'alpha' => ':attribute قد يحتوي على أحرف فقط.',
    'alpha_dash' => ':attribute قد يحتوي فقط على أحرف وأرقام وشرطات والشرطات السفلية.',
    'alpha_num' => 'يجب أن يحتوي :attribute فقط على أحرف و أرقام.',
    'array' => 'يجب أن تكون :attribute مصفوفة.',
    'before' => ':attribute يجب ان يكون تاريخ قبل :date.',
    'before_or_equal' => 'يجب أن يكون تاريخ :attribute قبل أو مساوياً لـ:date.',
    'between' => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file' => 'يجب أن يكون :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن تكون عدد حروف النّص :attribute بين :min و :max.',
        'array' => 'يجب أن تحتوي خانة :attribute على عدد من العناصر بين :min و :max.',
    ],
    'boolean' => 'حقل :attribute يجب أن يكون صحيحاً أو خاطئاً.',
    'confirmed' => 'خانة التأكيد غير متطابقة مع خانة :attribute.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'خانة :attribute ليست تاريخًا صحيحًا.',
    'date_equals' => 'يجب أن يكون :attribute مطابقاً للتاريخ :date.',
    'date_format' => 'إن :attribute غير متطابق مع تنسيق :format.',
    'different' => 'يجب أن تكون :attribute و :other مختلفين.',
    'digits' => 'يجب أن تحتوي خانة :attribute على عدد :digits من الأرقام.',
    'digits_between' => 'يجب أن تحتوي خانة :attribute على عدد من الأرقام بين :min و :max.',
    'dimensions' => 'خانة :attribute تحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'خانة :attribute تحتوي على قيمة مكررة.',
    'email' => 'يجب أن تحتوي خانة :attribute على عنوان بريد إلكتروني صحيح.',
    'ends_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values',
    'exists' => ':attribute المحدد غير صالح.',
    'file' => 'يجب أن تحتوي خانة :attribute على ملف.',
    'filled' => 'يجب أن يحتوي :attribute على قيمة.',
    'gt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النّص :attribute أكثر من :value حروفٍ/حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :value حروفٍ/حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على الأقل على :value عُنصرًا/عناصر.',
    ],
    'image' => 'يجب أن تكون :attribute صورة.',
    'in' => ':attribute المحدد غير صالح.',
    'in_array' => 'خانة :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صحيحًا',
    'ipv4' => 'يجب أن تكون :attribute عنوان IPv4 صالحا.',
    'ipv6' => 'القيمة: المدخلة يجب أن يكون عنوان IPv6 صالح',
    'json' => 'يجب أن يكون :attribute نص جسون JSON صالح.',
    'lt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أصغر من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النّص :attribute أقل من :value حروفٍ/حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على أقل من :value عناصر/عنصر.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :value.',
        'file' => ':attribute يجب أن يكون أقل من أو يساوي :value كيلوبايت.',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :value حروفٍ/حرفًا.',
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'max' => [
        'numeric' => 'يجب ان يكون :attribute أكبر من :max.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت.',
        'string' => 'يجب ان يكون :attribute أكبر من :max احرف.',
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'min' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا.',
        'array' => 'يجب أن تحتوي خانة :attribute على عدد :min من العناصر على الأقل.',
    ],
    'multiple_of' => 'يجب أن يكون :attribute مضاعفا من :value',
    'not_in' => 'الخانة المحددة :attribute غير صالحة.',
    'not_regex' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالحا.',
    'numeric' => 'يجب أن تحتوي خانة :attribute على عددًا صحيحًا.',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => 'يجب أن تكون خانة :attribute موجوداً.',
    'regex' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالحا.',
    'required' => 'الخانة :attribute إلزامية.',
    'required_if' => 'الخانة :attribute إلزامية إذا كانت خانة :other تساوي :value.',
    'required_unless' => 'الخانة :attribute تكون إلزامية ما لم تكن خانة :other تحتوي على :values.',
    'required_with' => ':attribute مطلوب إذا توفّر :values.',
    'required_with_all' => 'الخانة :attribute إلزامية إذا توفّر :values.',
    'required_without' => 'الخانة :attribute إلزامية إذا لم يتوفّر :values.',
    'required_without_all' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'same' => 'يجب أن تتطابق خانة :attribute مع :other.',
    'size' => [
        'numeric' => 'ان :attribute يجب ان يكون :size.',
        'file' => 'ان :attribute يجب ان يكون :size كيلوبايت.',
        'string' => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالضبط.',
        'array' => 'يجب أن تحتوي خانة :attribute على :size من العناصر.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن تكون خانة :attribute نصًا.',
    'timezone' => 'يجب أن تكون خانة :attribute نطاقًا زمنيًا صحيحًا.',
    'unique' => 'قيمة :attribute مُستخدمة من قبل.',
    'uploaded' => 'لقد فشل تحميل :attribute.',
    'url' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالحا.',
    'uuid' => 'الخانة: المدخلة يجب أن UUID صالح.',

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
            'rule-name' => 'رسالة مخصصة',
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
