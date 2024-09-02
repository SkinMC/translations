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

    'accepted' => ':attribute만 사용할 수 있어요.',
    'active_url' => ':attribute은(는) 잘못된 URL이에요.',
    'after' => ':attribute은(는) :date 이후의 기간이어야 해요.',
    'after_or_equal' => ':attribute은(는) :date 이후 또는 동일한 기간이어야 해요.',
    'alpha' => ':attribute이(가) 문자만 포함해야 해요.',
    'alpha_dash' => ':attribute이(가) 문자, 숫자, 대시(-), 밑줄만 포함해야 해요.',
    'alpha_num' => ':attribute이(가) 문자와 숫자만 포함해야 해요.',
    'array' => ':attribute이(가) 배열 형식이어야 해요.',
    'before' => ':attribute은(는) :date 이전의 기간이어야 해요.',
    'before_or_equal' => ':attribute은(는) :date 이전 또는 동일한 기간이어야 해요.',
    'between' => [
        'numeric' => ':attribute이(가) :min에서 :max 사이여야 해요.',
        'file' => ':attribute이(가) :min에서 :max 킬로바이트 사이여야 해요.',
        'string' => ':attribute이(가) :min에서 :max자 사이여야 해요.',
        'array' => ':attribute은(는) :min에서 :max개의 항목이 있어야 해요.',
    ],
    'boolean' => ':attribute이(가) true 또는 false 중 하나여야 해요.',
    'confirmed' => ':attribute 승인이 일치하지 않아요.',
    'current_password' => '비밀번호가 올바르지 않아요.',
    'date' => ':attribute은(는) 유효한 날짜가 아니에요.',
    'date_equals' => ':attribute은(는) 날짜가 :date 이어야 해요.',
    'date_format' => ':attribute은(는) :format 형식과 일치하지 않아요.',
    'different' => ':attribute과(와) :other은(는) 달라야 해요.',
    'digits' => ':attribute은(는) :digits자리 숫자여야 해요.',
    'digits_between' => ':attribute은(는) :min에서 :max자리 사이여야 해요.',
    'dimensions' => ':attribute은(는) 유효하지 않은 이미지 크기예요.',
    'distinct' => ':attribute 항목은 중복된 값이에요.',
    'email' => ':attribute은(는) 유효한 이메일 주소여야 해요.',
    'ends_with' => ':attribute은(는) 다음 중 하나로 끝나야 해요: :values.',
    'exists' => '선택된 :attribute은(는) 유효하지 않아요.',
    'file' => ':attribute은(는) 파일이어야 해요.',
    'filled' => ':attribute 항목은 값이 있어야 해요.',
    'gt' => [
        'numeric' => ':attribute은(는) :value 보다 커야 해요.',
        'file' => ':attribute은(는) :value 킬로바이트 보다 커야 해요.',
        'string' => ':attribute은(는) :value자 보다 커야 해요.',
        'array' => ':attribute은(는) :value 아이템 보다 많아야 해요.',
    ],
    'gte' => [
        'numeric' => ':attribute은(는) :value 이상이어야 해요.',
        'file' => ':attribute은(는) :value 킬로바이트 이상이어야 해요.',
        'string' => ':attribute은(는) :value자 이상이어야 해요.',
        'array' => ':attribute은(는) :value 아이템 이상이어야 해요.',
    ],
    'image' => '선택된 :attribute은(는) 이미지여야 해요.',
    'in' => '선택된 :attribute은(는) 유효하지 않아요.',
    'in_array' => ':attribute 항목은 :other에 존재하지 않아요.',
    'integer' => ':attribute은(는) 정수여야 해요.',
    'ip' => ':attribute은(는) 유효한 IP 주소여야 해요.',
    'ipv4' => ':attribute은(는) 유효한 IPv4 주소여야 해요.',
    'ipv6' => ':attribute은(는) 유효한 IPv6 주소여야 해요.',
    'json' => ':attribute은(는) 유효한 JSON 문자열이어야 해요.',
    'lt' => [
        'numeric' => ':attribute은(는) :value 미만이어야 해요.',
        'file' => ':attribute은(는) :value 킬로바이트 미만이어야 해요.',
        'string' => ':attribute은(는) :value자 미만이어야 해요.',
        'array' => ':attribute은(는) :value 아이템 미만이어야 해요.',
    ],
    'lte' => [
        'numeric' => ':attribute은(는) :value 이하여야 해요.',
        'file' => ':attribute은(는) :value 킬로바이트 이하여야 해요.',
        'string' => ':attribute은(는) :value자 이하여야 해요.',
        'array' => ':attribute은(는) :value 아이템보다 적아야 해요.',
    ],
    'max' => [
        'numeric' => ':attribute은(는) :max 보다 작아야 해요.',
        'file' => ':attribute은(는) :max 킬로바이트 보다 적아야 해요.',
        'string' => ':attribute은(는) :max자 보다 적아야 해요.',
        'array' => ':attribute은(는) :max 아이템 보다 적아야 해요.',
    ],
    'mimes' => ':attribute은(는) :values 형식의 파일이어야 해요.',
    'mimetypes' => ':attribute은(는) :values 형식의 파일이어야 해요.',
    'min' => [
        'numeric' => ':attribute은(는) 최소한 :min이어야 해요.',
        'file' => ':attribute은(는) 최소한 :min 킬로바이트여야 해요.',
        'string' => ':attribute은(는) 최소 :min자여야 해요.',
        'array' => ':attribute은(는) 최소 :min개의 아이템이어야 해요.',
    ],
    'multiple_of' => ':attribute은(는) :value의 곱이어야 해요.',
    'not_in' => '선택된 :attribute은(는) 유효하지 않아요.',
    'not_regex' => '선택된 :attribute 형식은 유효하지 않아요.',
    'numeric' => ':attribute은(는) 숫자여야 해요.',
    'password' => '비밀번호가 올바르지 않아요.',
    'present' => ':attribute에 항목이 있어야 해요.',
    'regex' => ':attribute의 형식이 유효하지 않아요.',
    'required' => ':attribute 항목은 필수예요.',
    'required_if' => ':other이(가) :value일 때 :attribute 항목은 필수예요.',
    'required_unless' => ':other이(가) :value일 때를 제외하고 :attribute 항목은 필수예요.',
    'required_with' => ':value이(가) :값이 있을 때 :attribute 항목은 필수예요.',
    'required_with_all' => ':value이(가) :값이 있을 때 :attribute 항목은 필수예요.',
    'required_without' => ':value이(가) :값이 없을 때 :attribute 항목은 필수예요.',
    'required_without_all' => ':value이(가) :값이 없을 때 :attribute 항목은 필수예요.',
    'same' => ':attribute과(와) :other은 같아야 해요.',
    'size' => [
        'numeric' => ':attribute은(는) :size 크기여야 해요.',
        'file' => ':attribute은(는) :size 킬로바이트 크기여야 해요.',
        'string' => ':attribute은(는) :size자 크기여야 해요.',
        'array' => ':attribute은(는) :size 아이템 크기여야 해요.',
    ],
    'starts_with' => ':attribute은(는) 다음 중 하나로 시작해야 해요: :values.',
    'string' => ':attribute은(는) 정수여야 해요.',
    'timezone' => ':attribute은(는) 유효한 구역이어야 해요.',
    'unique' => ':attribute은(는) 이미 존재해요.',
    'uploaded' => ':attribute은(는) 업로드에 실패했어요.',
    'url' => ':attribute의 형식이 유효하지 않아요.',
    'uuid' => ':attribute은(는) 유효한 UUID여야 해요.',

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
            'rule-name' => '맞춤-메시지',
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
