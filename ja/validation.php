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

    'accepted' => ':attribute は、承認される必要があります。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after' => ':attribute は :date よりも後の日付にして下さい。',
    'after_or_equal' => ':attribute は :date よりも後の日付か同じ日付にして下さい。',
    'alpha' => ':attribute は文字のみ含めることが出来ます。',
    'alpha_dash' => ':attribute は、文字、数字、ダッシュ、アンダースコアのみ含めることが出来ます。',
    'alpha_num' => ':attribute は、文字列と数字のみ含めることが出来ます。',
    'array' => ':attribute は配列にして下さい。',
    'before' => ':attribute は :date よりも前の日付にして下さい。',
    'before_or_equal' => ':attribute は :date よりも前の日付か同じ日にして下さい。',
    'between' => [
        'numeric' => ':attribute は :min から :max の範囲内にして下さい。',
        'file' => ':attribute は :min から :max キロバイトの範囲内にして下さい。',
        'string' => ':attribute は :min から :max 文字の範囲内にして下さい。',
        'array' => ':attribute は :min から :max 内のアイテムにして下さい。',
    ],
    'boolean' => ':attribute フィールドは、true または false にして下さい。',
    'confirmed' => ':attribute の確認が一致しません。',
    'current_password' => 'パスワードが違います',
    'date' => ':attribute は、有効な日付ではありません。',
    'date_equals' => ':attribute は :date と同じ日付にして下さい。',
    'date_format' => ':attribute は :format と一致しません。',
    'different' => ':attribute と :other は、異なっている必要があります。',
    'digits' => ':attribute は :digits 数字にして下さい。',
    'digits_between' => ':attribute は :min から :max 桁の数字にして下さい。',
    'dimensions' => ':attribute に無効な画像サイズがあります。',
    'distinct' => ':attribute フィールドが重複しています。',
    'email' => ':attribute は有効なメールアドレスにして下さい。',
    'ends_with' => ':attribute は、以下のいずれかの値で終了する必要があります。',
    'exists' => '選択した:attributeが正しくありません。',
    'file' => ':attribute はファイルにして下さい。',
    'filled' => ':attribute フィールドには値が必要です。',
    'gt' => [
        'numeric' => ':attribute は :value 以上にして下さい。',
        'file' => ':attribute は :value キロバイト以上にして下さい。',
        'string' => ':attribute は :value 文字以上にして下さい。',
        'array' => ':attribute は :value 以上にして下さい。',
    ],
    'gte' => [
        'numeric' => ':attribute は :value 以上にして下さい。',
        'file' => ':attribute は :value キロバイト以上にして下さい。',
        'string' => ':attribute は :value 文字以上にして下さい。',
        'array' => ':attribute は :value アイテム以上にして下さい。',
    ],
    'image' => ':attribute は画像にして下さい。',
    'in' => '選択した:attributeが正しくありません。',
    'in_array' => ':attribute フィールドが :other に存在しません。',
    'integer' => ':attribute は整数にして下さい。',
    'ip' => ':attribute は有効なIPアドレスにして下さい。',
    'ipv4' => ':attribute は有効なIPv4アドレスにして下さい。',
    'ipv6' => ':attribute は有効なIPv6アドレスにして下さい。',
    'json' => ':attribute は有効なJSON文字列にして下さい。',
    'lt' => [
        'numeric' => ':attribute は :value 未満にして下さい。',
        'file' => ':attribute は :value キロバイト未満にして下さい。',
        'string' => ':attribute は :value 文字以下にして下さい。',
        'array' => ':attribute は :value 以下のアイテムにして下さい。',
    ],
    'lte' => [
        'numeric' => ':attribute は :value 以下にして下さい。',
        'file' => ':attribute は :value キロバイト以下にして下さい。',
        'string' => ':attribute は :value 文字以下にして下さい。',
        'array' => ':attribute は :value 以上にして下さい。',
    ],
    'max' => [
        'numeric' => ':attribute は :max 以上にして下さい。',
        'file' => ':attribute は :max キロバイト以上にして下さい。',
        'string' => ':attribute は :max 文字以上にして下さい。',
        'array' => ':attribute は :max 以上のアイテムを持つことはできません。',
    ],
    'mimes' => ':attributeには、:values型のファイルを指定してください。',
    'mimetypes' => ':attributeには、:values型のファイルを指定してください。',
    'min' => [
        'numeric' => ':attribute は、少なくとも :min 以上にして下さい。',
        'file' => ':attribute は :min キロバイト以上にして下さい。',
        'string' => ':attribute は、少なくとも :min 文字以上にして下さい。',
        'array' => ':attribute は :min 以上にして下さい。',
    ],
    'multiple_of' => ':attribute は :value の倍数にして下さい。',
    'not_in' => '選択した:attributeが正しくありません。',
    'not_regex' => ':attribute フォーマットが不正です。',
    'numeric' => ':attribute は数字にして下さい。',
    'password' => 'パスワードが正しくありません。',
    'present' => ':attribute フィールドは必須です。',
    'regex' => ':attribute フォーマットが不正です。',
    'required' => ':attribute フィールドは必須です。',
    'required_if' => ':otherが:valueの場合、:attributeを指定してください。',
    'required_unless' => ':other が :value でない限り、:attribute フィールドは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeを指定してください。',
    'required_with_all' => ':valuesが存在する場合、:attributeを指定してください。',
    'required_without' => ':valuesが指定されていない場合、:attributeを指定してください。',
    'required_without_all' => ':valuesが指定されていない場合、:attributeを指定してください。',
    'same' => ':attribute と :other は、一致する必要があります。',
    'size' => [
        'numeric' => ':attribute は :size にして下さい。',
        'file' => ':attribute は :size キロバイトにして下さい。',
        'string' => ':attribute は :size 文字にして下さい。',
        'array' => ':attribute は :size にして下さい。',
    ],
    'starts_with' => ':attribute は、以下のいずれかの値で始まる必要があります。',
    'string' => ':attribute は文字列にして下さい。',
    'timezone' => ':attribute は有効なゾーンにして下さい。',
    'unique' => ':attributeは既に使用されています。',
    'uploaded' => ':attribute のアップロードに失敗しました。',
    'url' => ':attribute フォーマットが不正です。',
    'uuid' => ':attribute は、有効なUUIDでなければなりません。',

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
            'rule-name' => 'カスタムメッセージ',
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
