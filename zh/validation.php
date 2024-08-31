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

    'accepted' => '您必须同意 :attribute。',
    'active_url' => ':attribute 不是一个有效的URL网址',
    'after' => ':attribute 必须是一个在 :date 之后的日期。',
    'after_or_equal' => ':attribute 必须是一个在 :date 或之后的日期。',
    'alpha' => ':attribute 只能以字母组成。',
    'alpha_dash' => ':attribute 只能由字母、数字、短划线(-)和下划线(_)组成。',
    'alpha_num' => ':attribute 只能以字母及数字组成。',
    'array' => ':attribute 必须为数组。',
    'before' => ':attribute 必须要早于 :date。',
    'before_or_equal' => ':attribute 必须在 :date 或之前',
    'between' => [
        'numeric' => ':attribute 必须介于 :min 至 :max 之间。',
        'file' => ':attribute 必须介于 :min - :max KB 之间。',
        'string' => ':attribute 必须介于 :min 至 :max 个字符之间。',
        'array' => ':attribute 必须介于 :min 至 :max 件之间。',
    ],
    'boolean' => ':attribute 必须为 true 或 false。',
    'confirmed' => ':attribute 不匹配。',
    'current_password' => '密码错误。',
    'date' => ':attribute 不是有效日期。',
    'date_equals' => ':attribute 必须要等于 :date。',
    'date_format' => ':attribute 与格式 :format 不匹配。',
    'different' => ' :attribute 和 :other 不能相同',
    'digits' => ':attribute 必须是 :digits 数位。',
    'digits_between' => ':attribute 必须介于 :min 至 :max 位数字。',
    'dimensions' => ':attribute 图像尺寸无效。',
    'distinct' => ':attribute 已存在。',
    'email' => ':attribute 必须是一个有效的电子邮件地址。',
    'ends_with' => ':attribute 必须以 :values 为结尾。',
    'exists' => '选择的 :attribute 无效',
    'file' => ':attribute 必须是文件。',
    'filled' => ':attribute 不能为空。',
    'gt' => [
        'numeric' => ':attribute 必须大于 :value。',
        'file' => ':attribute 必须大于 :value KB。',
        'string' => ':attribute 必须多于 :value 个字符。',
        'array' => ':attribute 必须多于 :value 个元素。',
    ],
    'gte' => [
        'numeric' => ':attribute 必须大于或等于 :value。',
        'file' => ':attribute 必须大于或等于 :value KB。',
        'string' => ':attribute 必须多于或等于 :value 个字符。',
        'array' => ':attribute 必须多于或等于 :value 个元素。',
    ],
    'image' => ':attribute 必须是图片格式',
    'in' => '选择的 :attribute 无效',
    'in_array' => ':attribute 没有在 :other 中。',
    'integer' => ':attribute 必须是整数',
    'ip' => ':attribute 必须是一个有效的 IP 地址',
    'ipv4' => ':attribute 必须是一个有效的 IPv4 地址',
    'ipv6' => ':attribute 必须是一个有效的 IPv6 地址',
    'json' => ':attribute 必须是有效的 JSON 字符串。',
    'lt' => [
        'numeric' => ':attribute 必须小于 :value。',
        'file' => ':attribute 必须小于 :value KB。',
        'string' => ':attribute 必须少于 :value 个字符。',
        'array' => ':attribute 必须少于 :value 个元素。',
    ],
    'lte' => [
        'numeric' => ':attribute 必须小于或等于 :value。',
        'file' => ':attribute 必须小于或等于 :value KB。',
        'string' => ':attribute 必须少于或等于 :value 个字符。',
        'array' => ':attribute 必须少于或等于 :value 个元素。',
    ],
    'max' => [
        'numeric' => ':attribute 不能大于 :max。',
        'file' => ':attribute 不能大于 :max KB。',
        'string' => ':attribute 不能多于 :max 个字符。',
        'array' => ':attribute 的数量不能超过 :max 个。',
    ],
    'mimes' => ':attribute 文件类型必须是 :values。',
    'mimetypes' => ':attribute 文件类型必须是 :values。',
    'min' => [
        'numeric' => ':attribute 不能小于 :min。',
        'file' => ':attribute 大小不能小于 :min KB。',
        'string' => ':attribute 最少为 :min个字符',
        'array' => ':attribute 至少有 :min 个元素。',
    ],
    'multiple_of' => ':attribute 必须是 :value 的倍数',
    'not_in' => '选择的 :attribute 无效',
    'not_regex' => ':attribute 格式无效',
    'numeric' => ':attribute 必须为数字。',
    'password' => '密码错误。',
    'present' => ':attribute 为必填项。',
    'regex' => ':attribute 格式无效',
    'required' => ':attribute 字段必填',
    'required_if' => '当 :other 是 :value 时 :attribute 不能留空。',
    'required_unless' => '当 :other 不为 :values 时 :attribute 不能为空。',
    'required_with' => '当 :values存在时 :attribute 不能留空。',
    'required_with_all' => '当 :values 存在时 :attribute 不能为空。',
    'required_without' => '当 :values 不存在时， :attribute 为必填项。',
    'required_without_all' => '当没有任何 :values 存在时， :attribute 字段为必填项。',
    'same' => ':attribute 和 :other 必需匹配',
    'size' => [
        'numeric' => ':attribute 的大小必须是 :size。',
        'file' => ':attribute 大小必须为 :size KB。',
        'string' => ':attribute 必须包含 :size 个字符。',
        'array' => ':attribute 必须包含 :size 项。',
    ],
    'starts_with' => ':attribute 必须以 :values 为开头。',
    'string' => ':attribute 必须是一个字符串。',
    'timezone' => ':attribute 必须在有效范围内。',
    'unique' => ':attribute 已经被占用',
    'uploaded' => ':attribute 上传失败。',
    'url' => ':attribute 格式无效。',
    'uuid' => ':attribute 必须是有效的 UUID。',

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
            'rule-name' => '自定义信息',
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
