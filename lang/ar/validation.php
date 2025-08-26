<?php

return [
    /*
    |--------------------------------------------------------------------------
    | أسطر لغة التحقق (Validation)
    |--------------------------------------------------------------------------
    |
    | الأسطر التالية تحتوي على رسائل الخطأ الافتراضية المستخدمة من قبل
    | كلاس Validator. بعض هذه القواعد تحتوي على نسخ متعددة مثل قواعد الحجم.
    | يمكنك تعديل هذه الرسائل بحرية لتناسب تطبيقك.
    |
    */

    'accepted'        => 'يجب قبول حقل :attribute.',
    'accepted_if'     => 'يجب قبول حقل :attribute عندما يكون :other هو :value.',
    'active_url'      => 'حقل :attribute يجب أن يكون رابط URL صالحاً.',
    'after'           => 'حقل :attribute يجب أن يكون تاريخاً بعد :date.',
    'after_or_equal'  => 'حقل :attribute يجب أن يكون تاريخاً بعد أو يساوي :date.',
    'alpha'           => 'حقل :attribute يجب أن يحتوي على أحرف فقط.',
    'alpha_dash'      => 'حقل :attribute يجب أن يحتوي فقط على أحرف، أرقام، شرطات، وشرطات سفلية.',
    'alpha_num'       => 'حقل :attribute يجب أن يحتوي فقط على أحرف وأرقام.',
    'any_of'          => 'حقل :attribute غير صالح.',
    'array'           => 'حقل :attribute يجب أن يكون مصفوفة.',
    'ascii'           => 'حقل :attribute يجب أن يحتوي فقط على رموز وأحرف ASCII.',
    'before'          => 'حقل :attribute يجب أن يكون تاريخاً قبل :date.',
    'before_or_equal' => 'حقل :attribute يجب أن يكون تاريخاً قبل أو يساوي :date.',
    'between'         => [
        'array'   => 'حقل :attribute يجب أن يحتوي بين :min و :max عناصر.',
        'file'    => 'حقل :attribute يجب أن يكون بين :min و :max كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون بين :min و :max.',
        'string'  => 'حقل :attribute يجب أن يكون بين :min و :max أحرف.',
    ],
    'boolean'           => 'حقل :attribute يجب أن يكون صح أو خطأ.',
    'can'               => 'حقل :attribute يحتوي على قيمة غير مصرح بها.',
    'confirmed'         => 'تأكيد حقل :attribute غير متطابق.',
    'contains'          => 'حقل :attribute يفتقد إلى قيمة مطلوبة.',
    'current_password'  => 'كلمة المرور غير صحيحة.',
    'date'              => 'حقل :attribute يجب أن يكون تاريخاً صالحاً.',
    'date_equals'       => 'حقل :attribute يجب أن يكون تاريخاً مساوياً لـ :date.',
    'date_format'       => 'حقل :attribute لا يطابق الشكل :format.',
    'decimal'           => 'حقل :attribute يجب أن يحتوي على :decimal منازل عشرية.',
    'declined'          => 'يجب رفض حقل :attribute.',
    'declined_if'       => 'يجب رفض حقل :attribute عندما يكون :other هو :value.',
    'different'         => 'حقل :attribute و :other يجب أن يكونا مختلفين.',
    'digits'            => 'حقل :attribute يجب أن يكون :digits أرقام.',
    'digits_between'    => 'حقل :attribute يجب أن يكون بين :min و :max أرقام.',
    'dimensions'        => 'حقل :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct'          => 'حقل :attribute يحتوي على قيمة مكررة.',
    'doesnt_end_with'   => 'حقل :attribute يجب ألا ينتهي بأحد القيم التالية: :values.',
    'doesnt_start_with' => 'حقل :attribute يجب ألا يبدأ بأحد القيم التالية: :values.',
    'email'             => 'حقل :attribute يجب أن يكون بريداً إلكترونياً صالحاً.',
    'ends_with'         => 'حقل :attribute يجب أن ينتهي بأحد القيم التالية: :values.',
    'enum'              => 'القيمة المختارة في :attribute غير صالحة.',
    'exists'            => 'القيمة المختارة في :attribute غير صالحة.',
    'extensions'        => 'حقل :attribute يجب أن يحتوي على أحد الامتدادات التالية: :values.',
    'file'              => 'حقل :attribute يجب أن يكون ملفاً.',
    'filled'            => 'حقل :attribute يجب أن يحتوي على قيمة.',
    'gt'                => [
        'array'   => 'حقل :attribute يجب أن يحتوي على أكثر من :value عناصر.',
        'file'    => 'حقل :attribute يجب أن يكون أكبر من :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أكبر من :value.',
        'string'  => 'حقل :attribute يجب أن يكون أكبر من :value أحرف.',
    ],
    'gte' => [
        'array'   => 'حقل :attribute يجب أن يحتوي على :value عناصر أو أكثر.',
        'file'    => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value.',
        'string'  => 'حقل :attribute يجب أن يكون أكبر من أو يساوي :value أحرف.',
    ],
    'hex_color'     => 'حقل :attribute يجب أن يكون لوناً صحيحاً بالنظام الست عشري.',
    'image'         => 'حقل :attribute يجب أن يكون صورة.',
    'in'            => 'القيمة المختارة في :attribute غير صالحة.',
    'in_array'      => 'حقل :attribute يجب أن يوجد في :other.',
    'in_array_keys' => 'حقل :attribute يجب أن يحتوي على أحد المفاتيح التالية: :values.',
    'integer'       => 'حقل :attribute يجب أن يكون عدداً صحيحاً.',
    'ip'            => 'حقل :attribute يجب أن يكون عنوان IP صالحاً.',
    'ipv4'          => 'حقل :attribute يجب أن يكون عنوان IPv4 صالحاً.',
    'ipv6'          => 'حقل :attribute يجب أن يكون عنوان IPv6 صالحاً.',
    'json'          => 'حقل :attribute يجب أن يكون نص JSON صالح.',
    'list'          => 'حقل :attribute يجب أن يكون قائمة.',
    'lowercase'     => 'حقل :attribute يجب أن يكون بأحرف صغيرة.',
    'lt'            => [
        'array'   => 'حقل :attribute يجب أن يحتوي على أقل من :value عناصر.',
        'file'    => 'حقل :attribute يجب أن يكون أقل من :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أقل من :value.',
        'string'  => 'حقل :attribute يجب أن يكون أقل من :value أحرف.',
    ],
    'lte' => [
        'array'   => 'حقل :attribute يجب ألا يحتوي على أكثر من :value عناصر.',
        'file'    => 'حقل :attribute يجب أن يكون أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون أقل من أو يساوي :value.',
        'string'  => 'حقل :attribute يجب أن يكون أقل من أو يساوي :value أحرف.',
    ],
    'mac_address' => 'حقل :attribute يجب أن يكون عنوان MAC صالح.',
    'max'         => [
        'array'   => 'حقل :attribute يجب ألا يحتوي على أكثر من :max عناصر.',
        'file'    => 'حقل :attribute يجب ألا يكون أكبر من :max كيلوبايت.',
        'numeric' => 'حقل :attribute يجب ألا يكون أكبر من :max.',
        'string'  => 'حقل :attribute يجب ألا يكون أكبر من :max أحرف.',
    ],
    'max_digits' => 'حقل :attribute يجب ألا يحتوي على أكثر من :max أرقام.',
    'mimes'      => 'حقل :attribute يجب أن يكون ملفاً من نوع: :values.',
    'mimetypes'  => 'حقل :attribute يجب أن يكون ملفاً من نوع: :values.',
    'min'        => [
        'array'   => 'حقل :attribute يجب أن يحتوي على الأقل :min عناصر.',
        'file'    => 'حقل :attribute يجب أن يكون على الأقل :min كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون على الأقل :min.',
        'string'  => 'حقل :attribute يجب أن يكون على الأقل :min أحرف.',
    ],
    'min_digits'       => 'حقل :attribute يجب أن يحتوي على الأقل :min أرقام.',
    'missing'          => 'حقل :attribute يجب أن يكون مفقوداً.',
    'missing_if'       => 'حقل :attribute يجب أن يكون مفقوداً عندما يكون :other هو :value.',
    'missing_unless'   => 'حقل :attribute يجب أن يكون مفقوداً إلا إذا كان :other هو :value.',
    'missing_with'     => 'حقل :attribute يجب أن يكون مفقوداً عندما تكون :values موجودة.',
    'missing_with_all' => 'حقل :attribute يجب أن يكون مفقوداً عندما تكون :values موجودة.',
    'multiple_of'      => 'حقل :attribute يجب أن يكون مضاعفاً لـ :value.',
    'not_in'           => 'القيمة المختارة في :attribute غير صالحة.',
    'not_regex'        => 'تنسيق حقل :attribute غير صالح.',
    'numeric'          => 'حقل :attribute يجب أن يكون رقماً.',
    'password'         => [
        'letters'       => 'حقل :attribute يجب أن يحتوي على حرف واحد على الأقل.',
        'mixed'         => 'حقل :attribute يجب أن يحتوي على حرف كبير وحرف صغير على الأقل.',
        'numbers'       => 'حقل :attribute يجب أن يحتوي على رقم واحد على الأقل.',
        'symbols'       => 'حقل :attribute يجب أن يحتوي على رمز واحد على الأقل.',
        'uncompromised' => 'القيمة المقدمة في :attribute ظهرت في تسريب بيانات. الرجاء اختيار قيمة أخرى.',
    ],
    'present'                => 'حقل :attribute يجب أن يكون موجوداً.',
    'present_if'             => 'حقل :attribute يجب أن يكون موجوداً عندما يكون :other هو :value.',
    'present_unless'         => 'حقل :attribute يجب أن يكون موجوداً إلا إذا كان :other هو :value.',
    'present_with'           => 'حقل :attribute يجب أن يكون موجوداً عندما تكون :values موجودة.',
    'present_with_all'       => 'حقل :attribute يجب أن يكون موجوداً عندما تكون :values موجودة.',
    'prohibited'             => 'حقل :attribute محظور.',
    'prohibited_if'          => 'حقل :attribute محظور عندما يكون :other هو :value.',
    'prohibited_if_accepted' => 'حقل :attribute محظور عندما يتم قبول :other.',
    'prohibited_if_declined' => 'حقل :attribute محظور عندما يتم رفض :other.',
    'prohibited_unless'      => 'حقل :attribute محظور إلا إذا كان :other ضمن :values.',
    'prohibits'              => 'حقل :attribute يمنع وجود :other.',
    'regex'                  => 'تنسيق حقل :attribute غير صالح.',
    'required'               => 'حقل :attribute مطلوب.',
    'required_array_keys'    => 'حقل :attribute يجب أن يحتوي على مفاتيح: :values.',
    'required_if'            => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_if_accepted'   => 'حقل :attribute مطلوب عندما يتم قبول :other.',
    'required_if_declined'   => 'حقل :attribute مطلوب عندما يتم رفض :other.',
    'required_unless'        => 'حقل :attribute مطلوب إلا إذا كان :other ضمن :values.',
    'required_with'          => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_with_all'      => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_without'       => 'حقل :attribute مطلوب عندما لا تكون :values موجودة.',
    'required_without_all'   => 'حقل :attribute مطلوب عندما لا تكون أي من :values موجودة.',
    'same'                   => 'حقل :attribute يجب أن يطابق :other.',
    'size'                   => [
        'array'   => 'حقل :attribute يجب أن يحتوي على :size عناصر.',
        'file'    => 'حقل :attribute يجب أن يكون :size كيلوبايت.',
        'numeric' => 'حقل :attribute يجب أن يكون :size.',
        'string'  => 'حقل :attribute يجب أن يكون :size أحرف.',
    ],
    'starts_with' => 'حقل :attribute يجب أن يبدأ بأحد القيم التالية: :values.',
    'string'      => 'حقل :attribute يجب أن يكون نصاً.',
    'timezone'    => 'حقل :attribute يجب أن يكون منطقة زمنية صحيحة.',
    'unique'      => 'قيمة :attribute مستخدمة من قبل.',
    'uploaded'    => 'فشل في رفع :attribute.',
    'uppercase'   => 'حقل :attribute يجب أن يكون بأحرف كبيرة.',
    'url'         => 'حقل :attribute يجب أن يكون رابط URL صالح.',
    'ulid'        => 'حقل :attribute يجب أن يكون ULID صالح.',
    'uuid'        => 'حقل :attribute يجب أن يكون UUID صالح.',

    /*
    |--------------------------------------------------------------------------
    | رسائل تحقق مخصصة
    |--------------------------------------------------------------------------
    |
    | يمكنك تحديد رسائل تحقق مخصصة للخصائص باستخدام الصيغة
    | "attribute.rule" لتسمية الأسطر. هذا يسهل تخصيص الرسائل.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة مخصصة',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | أسماء الخصائص المخصصة
    |--------------------------------------------------------------------------
    |
    | الأسطر التالية تُستخدم لاستبدال اسم السمة الافتراضي (attribute)
    | باسم أوضح للمستخدم مثل "البريد الإلكتروني" بدلاً من "email".
    |
    */

    'attributes' => [
        'title' => 'العنوان',
        'sub_title' => 'العنوان الفرعي',
        'sort' => 'الترتيب',
        'image' => 'الصورة',
    ],
];
