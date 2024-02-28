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

    'accepted' => ':attribute 必须接受。',
    'accepted_if' => '当 :other 为 :value 时，:attribute 必须接受。',
    'active_url' => ':attribute 必须是一个有效的 URL 地址。',
    'after' => ':attribute 必须晚于 :date 日期。',
    'after_or_equal' => ':attribute 必须晚于或等于 :date 日期。',
    'alpha' => ':attribute 只能包含字母。',
    'alpha_dash' => ':attribute 只能包含字母、数字、破折号和下划线。',
    'alpha_num' => ':attribute 只能包含字母和数字。',
    'array' => ':attribute 必须是一个数组。',
    'ascii' => ':attribute 只能包含单字节字母数字字符和符号。',
    'before' => ':attribute 必须早于 :date 日期。',
    'before_or_equal' => ':attribute 必须早于或等于 :date 日期。',
    'between' => [
        'array' => ':attribute 必须包含 :min 到 :max 个项目。',
        'file' => ':attribute 大小必须在 :min 到 :max 千字节之间。',
        'numeric' => ':attribute 必须介于 :min 和 :max 之间。',
        'string' => ':attribute 字符长度必须介于 :min 和 :max 之间。',
    ],
    'boolean' => ':attribute 必须为真或假。',
    'can' => ':attribute 包含非法值。',
    'confirmed' => ':attribute 的确认与 :attribute 不匹配。',
    'current_password' => '密码错误。',
    'date' => ':attribute 必须是一个有效的日期。',
    'date_equals' => ':attribute 必须等于 :date 日期。',
    'date_format' => ':attribute 必须符合格式 :format。',
    'decimal' => ':attribute 必须有 :decimal 个小数位。',
    'declined' => ':attribute 必须拒绝。',
    'declined_if' => '当 :other 为 :value 时，:attribute 必须拒绝。',
    'different' => ':attribute 和 :other 必须不同。',
    'digits' => ':attribute 必须是 :digits 位数字。',
    'digits_between' => ':attribute 必须是 :min 到 :max 位数字。',
    'dimensions' => ':attribute 图像尺寸无效。',
    'distinct' => ':attribute 字段有重复的值。',
    'doesnt_end_with' => ':attribute 不能以下列任何值结尾: :values.',
    'doesnt_start_with' => ':attribute 不能以下列任何值开头: :values.',
    'email' => ':attribute 必须是一个有效的电子邮件地址。',
    'ends_with' => ':attribute 必须以下列任何值结尾: :values.',
    'enum' => '选择的 :attribute 无效。',
    'exists' => '选择的 :attribute 无效。',
    'extensions' => ':attribute 必须具有以下扩展名之一: :values.',
    'file' => ':attribute 必须是一个文件。',
    'filled' => ':attribute 必须有值。',
    'gt' => [ // Greater Than
        'array' => ':attribute 必须包含多于 :value 个项目。',
        'file' => ':attribute 必须大于 :value 千字节。',
        'numeric' => ':attribute 必须大于 :value。',
        'string' => ':attribute 字符长度必须大于 :value 字符。',
    ],
    'gte' => [ // Greater Than or Equal
        'array' => ':attribute 必须包含 :value 个项目或更多。',
        'file' => ':attribute 必须大于或等于 :value 千字节。',
        'numeric' => ':attribute 必须大于或等于 :value。',
        'string' => ':attribute 字符长度必须大于或等于 :value 字符。',
    ],
    'hex_color' => ':attribute 必须是有效的十六进制颜色。',
    'image' => ':attribute 必须是一个图像。',
    'in' => '选择的 :attribute 无效。',
    'in_array' => ':attribute 必须存在于 :other 中。',
    'integer' => ':attribute 必须是一个整数。',
    'ip' => ':attribute 必须是一个有效的 IP 地址。',
    'ipv4' => ':attribute 必须是一个有效的 IPv4 地址。',
    'ipv6' => ':attribute 必须是一个有效的 IPv6 地址。',
    'json' => ':attribute 必须是一个有效的 JSON 字符串。',
    'lowercase' => ':attribute 必须是小写。',
    'lt' => [ // Less Than
        'array' => ':attribute 必须少于 :value 个项目。',
        'file' => ':attribute 必须小于 :value 千字节。',
        'numeric' => ':attribute 必须小于 :value。',
        'string' => ':attribute 字符长度必须小于 :value 字符。',
    ],
    'lte' => [ // Less Than or Equal
        'array' => ':attribute 必须少于或等于 :value 个项目。',
        'file' => ':attribute 必须小于或等于 :value 千字节。',
        'numeric' => ':attribute 必须小于或等于 :value。',
        'string' => ':attribute 字符长度必须小于或等于 :value 字符。',
    ],
    'mac_address' => ':attribute 必须是一个有效的 MAC 地址。',
    'max' => [ // Maximum
        'array' => ':attribute 必须不超过 :max 个项目。',
        'file' => ':attribute 必须不大于 :max 千字节。',
        'numeric' => ':attribute 必须不大于 :max。',
        'string' => ':attribute 字符长度必须不大于 :max 字符。',
    ],
    'max_digits' => ':attribute 必须不超过 :max 位数字。',
    'mimes' => ':attribute 必须是以下文件类型之一: :values.',
    'mimetypes' => ':attribute 必须是以下文件类型之一: :values.',
    'min' => [
        'array' => ':attribute 必须包含至少 :min 个项目。',
        'file' => ':attribute 必须至少为 :min 千字节。',
        'numeric' => ':attribute 必须至少为 :min。',
        'string' => ':attribute 字符长度必须至少为 :min 字符。',
    ],
    'min_digits' => ':attribute 必须至少有 :min 位数字。',
    'missing' => ':attribute 字段必须缺失。',
    'missing_if' => '当 :other 为 :value 时，:attribute 字段必须缺失。',
    'missing_unless' => '除非 :other 为 :value，否则 :attribute 字段必须缺失。',
    'missing_with' => '当 :values 存在时，:attribute 字段必须缺失。',
    'missing_with_all' => '当所有 :values 存在时，:attribute 字段必须缺失。',
    'multiple_of' => ':attribute 必须是 :value 的倍数。',
    'not_in' => '选择的 :attribute 无效。',
    'not_regex' => ':attribute 格式无效。',
    'numeric' => ':attribute 必须是一个数字。',
    'password' => [
        'letters' => ':attribute 必须包含至少一个字母。',
        'mixed' => ':attribute 必须同时包含至少一个小写字母和大写字母。',
        'numbers' => ':attribute 必须包含至少一个数字。',
        'symbols' => ':attribute 必须包含至少一个符号。',
        'uncompromised' => '提供的 :attribute 曾在数据泄露事件中出现过。 请选择不同的 :attribute。',
    ],
    'present' => ':attribute 字段必须存在。',
    'present_if' => '当 :other 为 :value 时，:attribute 字段必须存在。',
    'present_unless' => '除非 :other 为 :value，否则 :attribute 字段必须存在。',
    'present_with' => '当 :values 存在时，:attribute 字段必须存在。',
    'present_with_all' => '当所有 :values 存在时，:attribute 字段必须存在。',
    'prohibited' => ':attribute 禁止使用。',
    'prohibited_if' => '当 :other 为 :value 时，:attribute 禁止使用。',
    'prohibited_unless' => '除非 :other 为 :values 中的值，否则 :attribute 禁止使用。',
    'prohibits' => ':attribute 的存在禁止 :other 也存在。',
    'regex' => ':attribute 格式无效。',
    'required' => ':attribute 是必填项。',
    'required_array_keys' => ':attribute 必须包含以下键的条目: :values.',
    'required_if' => '当 :other 为 :value 时，:attribute 是必填项。',
    'required_if_accepted' => '当 :other 被接受时，:attribute 是必填项。',
    'required_unless' => '除非 :other 为 :values 中的值，否则 :attribute 是必填项。',
    'required_with' => '当 :values 存在时，:attribute 是必填项。',
    'required_with_all' => '当所有 :values 存在时，:attribute 是必填项。',
    'required_without' => '当 :values 不存在时，:attribute 是必填项。',
    'required_without_all' => '当所有 :values 都不存在时，:attribute 是必填项。',
    'same' => ':attribute 必须和 :other 相同。',

    'size' => [
        'array' => ':attribute 必须包含 :size 个项目。',
        'file' => ':attribute 必须为 :size 千字节。',
        'numeric' => ':attribute 必须为 :size。',
        'string' => ':attribute 字符长度必须为 :size 字符。',
    ],
    'starts_with' => ':attribute 必须以下列任何值开头: :values.',
    'string' => ':attribute 必须是字符串。',
    'timezone' => ':attribute 必须是有效的时区。',
    'unique' => ':attribute 已被占用。',
    'uploaded' => ':attribute 上传失败。',
    'uppercase' => ':attribute 必须是大写。',
    'url' => ':attribute 必须是一个有效的 URL 地址。',
    'ulid' => ':attribute 必须是一个有效的 ULID。',
    'uuid' => ':attribute 必须是一个有效的 UUID。',

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
