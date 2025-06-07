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

  'accepted'             => ':attribute باید پذیرفته شده باشد.',
  'active_url'           => ':attribute آدرس معتبری نیست.',
  'after'                => ':attribute باید تاریخی بعد از :date باشد.',
  'after_or_equal'       => ':attribute باید تاریخی بعد از یا مساوی با :date باشد.',
  'alpha'                => ':attribute فقط می‌تواند شامل حروف باشد.',
  'alpha_dash'           => ':attribute فقط می‌تواند شامل حروف، اعداد و خط تیره باشد.',
  "ascii_only"           => ":attribute فقط می‌تواند شامل حروف، اعداد و خط تیره باشد.",
  'alpha_num'            => ':attribute فقط می‌تواند شامل حروف و اعداد باشد.',
  'array'                => ':attribute باید یک آرایه باشد.',
  'before'               => ':attribute باید تاریخی قبل از :date باشد.',
  'before_or_equal'      => ':attribute باید تاریخی قبل از یا مساوی با :date باشد.',
  'between'              => [
    'numeric' => ':attribute باید بین :min و :max باشد.',
    'file'    => ':attribute باید بین :min و :max کیلوبایت باشد.',
    'string'  => ':attribute باید بین :min و :max کاراکتر باشد.',
    'array'   => ':attribute باید بین :min و :max آیتم داشته باشد.',
  ],
  'boolean'              => 'فیلد :attribute فقط می‌تواند true یا false باشد.',
  'confirmed'            => ':attribute با تاییدیه مطابقت ندارد.',
  'date'                 => ':attribute تاریخ معتبری نیست.',
  'date_format'          => ':attribute با فرمت :format مطابقت ندارد.',
  'different'            => ':attribute و :other باید متفاوت باشند.',
  'digits'               => ':attribute باید :digits رقم باشد.',
  'digits_between'       => ':attribute باید بین :min و :max رقم باشد.',
  'dimensions'           => ':attribute ابعاد تصویر نامعتبر است (حداقل :min_width x :min_height پیکسل).',
  'distinct'             => 'فیلد :attribute مقدار تکراری دارد.',
  'email'                => ':attribute باید یک ایمیل معتبر باشد.',
  'exists'               => ':attribute انتخاب شده معتبر نیست.',
  'file'                 => ':attribute باید یک فایل باشد.',
  'filled'               => 'فیلد :attribute باید مقدار داشته باشد.',
  'gt'                   => [
    'numeric' => ':attribute باید بزرگتر از :value باشد.',
    'file'    => ':attribute باید بزرگتر از :value کیلوبایت باشد.',
    'string'  => ':attribute باید بزرگتر از :value کاراکتر باشد.',
    'array'   => ':attribute باید بیشتر از :value آیتم داشته باشد.',
  ],
  'gte'                  => [
    'numeric' => ':attribute باید بزرگتر یا مساوی :value باشد.',
    'file'    => ':attribute باید بزرگتر یا مساوی :value کیلوبایت باشد.',
    'string'  => ':attribute باید بزرگتر یا مساوی :value کاراکتر باشد.',
    'array'   => ':attribute باید :value آیتم یا بیشتر داشته باشد.',
  ],
  'image'                => ':attribute باید یک تصویر باشد.',
  'in'                   => ':attribute انتخاب شده معتبر نیست.',
  'in_array'             => 'فیلد :attribute در :other وجود ندارد.',
  'integer'              => ':attribute باید عدد صحیح باشد.',
  'ip'                   => ':attribute باید آدرس IP معتبر باشد.',
  'ipv4'                 => ':attribute باید آدرس IPv4 معتبر باشد.',
  'ipv6'                 => ':attribute باید آدرس IPv6 معتبر باشد.',
  'json'                 => ':attribute باید یک رشته JSON معتبر باشد.',
  'lt'                   => [
    'numeric' => ':attribute باید کوچکتر از :value باشد.',
    'file'    => ':attribute باید کوچکتر از :value کیلوبایت باشد.',
    'string'  => ':attribute باید کوچکتر از :value کاراکتر باشد.',
    'array'   => ':attribute باید کمتر از :value آیتم داشته باشد.',
  ],
  'lte'                  => [
    'numeric' => ':attribute باید کوچکتر یا مساوی :value باشد.',
    'file'    => ':attribute باید کوچکتر یا مساوی :value کیلوبایت باشد.',
    'string'  => ':attribute باید کوچکتر یا مساوی :value کاراکتر باشد.',
    'array'   => ':attribute نباید بیشتر از :value آیتم داشته باشد.',
  ],
  'max'                  => [
    'numeric' => ':attribute نباید بزرگتر از :max باشد.',
    'file'    => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
    'string'  => ':attribute نباید بیشتر از :max کاراکتر باشد.',
    'array'   => ':attribute نباید بیشتر از :max آیتم داشته باشد.',
  ],
  'mimes'                => ':attribute باید از نوع فایل: :values باشد.',
  'mimetypes'            => ':attribute باید از نوع فایل: :values باشد.',
  'min'                  => [
    'numeric' => ':attribute نباید کوچکتر از :min باشد.',
    'file'    => ':attribute نباید کوچکتر از :min کیلوبایت باشد.',
    'string'  => ':attribute نباید کمتر از :min کاراکتر باشد.',
    'array'   => ':attribute نباید کمتر از :min آیتم داشته باشد.',
  ],
  'not_in'               => ':attribute انتخاب شده معتبر نیست.',
  'not_regex'            => 'فرمت :attribute معتبر نیست.',
  'numeric'              => ':attribute باید عدد باشد.',
  'present'              => 'فیلد :attribute باید موجود باشد.',
  'regex'                => 'فرمت :attribute معتبر نیست.',
  'required'             => 'فیلد :attribute الزامی است.',
  'required_if'          => 'فیلد :attribute الزامی است وقتی :other برابر با :value است.',
  'required_unless'      => 'فیلد :attribute الزامی است مگر اینکه :other در :values باشد.',
  'required_with'        => 'فیلد :attribute الزامی است وقتی :values موجود است.',
  'required_with_all'    => 'فیلد :attribute الزامی است وقتی :values موجود است.',
  'required_without'     => 'فیلد :attribute الزامی است وقتی :values موجود نیست.',
  'required_without_all' => 'فیلد :attribute الزامی است وقتی هیچ یک از :values موجود نیست.',
  'same'                 => ':attribute و :other باید مطابقت داشته باشند.',
  'size'                 => [
    'numeric' => ':attribute باید برابر با :size باشد.',
    'file'    => ':attribute باید برابر با :size کیلوبایت باشد.',
    'string'  => ':attribute باید برابر با :size کاراکتر باشد.',
    'array'   => ':attribute باید شامل :size آیتم باشد.',
  ],
  'string'               => ':attribute باید رشته باشد.',
  'timezone'             => ':attribute باید منطقه زمانی معتبر باشد.',
  'unique'               => ':attribute قبلا انتخاب شده است.',
  'uploaded'             => 'آپلود :attribute ناموفق بود.',
  'url'                  => 'فرمت :attribute معتبر نیست.',
  "account_not_confirmed" => "حساب شما تایید نشده است، لطفا ایمیل خود را بررسی کنید",
  "user_suspended"        => "حساب شما مسدود شده است، در صورت خطا با ما تماس بگیرید",
  "letters"              => ":attribute باید حداقل شامل یک حرف یا عدد باشد",
  'video_url'          => 'آدرس نامعتبر، فقط یوتیوب و ویمئو پشتیبانی می‌شود.',
  'update_max_length' => 'پست نباید بیشتر از :max کاراکتر باشد.',
  'update_min_length' => 'پست باید حداقل :min کاراکتر باشد.',
  'video_url_required'   => 'فیلد آدرس ویدیو الزامی است وقتی محتوای ویژه ویدیو است.',

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
      'rule-name' => 'پیام سفارشی',
    ],
  ],

  /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

  'attributes' => [
    'agree_gdpr' => 'موافقت با پردازش داده‌های شخصی',
    'agree_terms' => 'موافقت با شرایط و ضوابط',
    'agree_terms_privacy' => 'موافقت با شرایط و ضوابط و سیاست حفظ حریم خصوصی',
    'full_name' => 'نام کامل',
    'name' => 'نام',
    'username'  => 'نام کاربری',
    'username_email' => 'نام کاربری یا ایمیل',
    'email'     => 'ایمیل',
    'password'  => 'رمز عبور',
    'password_confirmation' => 'تکرار رمز عبور',
    'website'   => 'وبسایت',
    'location' => 'موقعیت',
    'countries_id' => 'کشور',
    'twitter'   => 'توییتر',
    'facebook'   => 'فیسبوک',
    'google'   => 'گوگل',
    'instagram'   => 'اینستاگرام',
    'comment' => 'نظر',
    'title' => 'عنوان',
    'description' => 'توضیحات',
    'old_password' => 'رمز عبور قدیمی',
    'new_password' => 'رمز عبور جدید',
    'email_paypal' => 'ایمیل پی‌پال',
    'email_paypal_confirmation' => 'تکرار ایمیل پی‌پال',
    'bank_details' => 'جزئیات بانکی',
    'video_url' => 'آدرس ویدیو',
    'categories_id' => 'دسته‌بندی',
    'story' => 'داستان',
    'image' => 'تصویر',
    'avatar' => 'آواتار',
    'message' => 'پیام',
    'profession' => 'حرفه',
    'thumbnail' => 'تصویر کوچک',
    'address' => 'آدرس',
    'city' => 'شهر',
    'zip' => 'کد پستی',
    'payment_gateway' => 'درگاه پرداخت',
    'payment_gateway_tip' => 'درگاه پرداخت',
    'MAIL_FROM_ADDRESS' => 'ایمیل no-reply',
    'FILESYSTEM_DRIVER' => 'دیسک',
    'price' => 'قیمت',
    'amount' => 'مبلغ',
    'birthdate' => 'تاریخ تولد',
    'navbar_background_color' => 'رنگ پس‌زمینه نوار ناوبری',
    'navbar_text_color' => 'رنگ متن نوار ناوبری',
    'footer_background_color' => 'رنگ پس‌زمینه فوتر',
    'footer_text_color' => 'رنگ متن فوتر',

    'AWS_ACCESS_KEY_ID' => 'کلید آمازون',
    'AWS_SECRET_ACCESS_KEY' => 'رمز آمازون',
    'AWS_DEFAULT_REGION' => 'منطقه آمازون',
    'AWS_BUCKET' => 'سطل آمازون',

    'DOS_ACCESS_KEY_ID' => 'کلید دیجیتال اوشن',
    'DOS_SECRET_ACCESS_KEY' => 'رمز دیجیتال اوشن',
    'DOS_DEFAULT_REGION' => 'منطقه دیجیتال اوشن',
    'DOS_BUCKET' => 'سطل دیجیتال اوشن',

    'WAS_ACCESS_KEY_ID' => 'کلید واسابی',
    'WAS_SECRET_ACCESS_KEY' => 'رمز واسابی',
    'WAS_DEFAULT_REGION' => 'منطقه واسابی',
    'WAS_BUCKET' => 'سطل واسابی',

    //===== v2.0
    'BACKBLAZE_ACCOUNT_ID' => 'آی‌دی حساب بک‌بلیز',
    'BACKBLAZE_APP_KEY' => 'کلید اصلی برنامه بک‌بلیز',
    'BACKBLAZE_BUCKET' => 'نام سطل بک‌بلیز',
    'BACKBLAZE_BUCKET_REGION' => 'منطقه سطل بک‌بلیز',
    'BACKBLAZE_BUCKET_ID' => 'نقطه پایان سطل بک‌بلیز',

    'VULTR_ACCESS_KEY' => 'کلید ولتر',
    'VULTR_SECRET_KEY' => 'رمز ولتر',
    'VULTR_REGION' => 'منطقه ولتر',
    'VULTR_BUCKET' => 'سطل ولتر',
  ],

];
