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

    'accepted'             => ':attribute是被接受的',
    'active_url'           => ':attribute必須是一個合法的 URL',
    'after'                => ':attribute是 :date 之後的一個日期',
    'alpha'                => 'attribute必須全部由字母字符構成。',
    'alpha_dash'           => ':attribute必須全部由字母、數字、中劃線或下劃線字符構成',
    'alpha_num'            => ':attribute必須全部由字母和數字構成',
    'array'                => ':attribute必須是個數组',
    'before'               => ':attribute 必須是 :date 之前的一個日期',
    'between'              => [
        'numeric' => ':attribute 必須在 :min 到 :max之間',
        'file'    => ':attribute 必須在 :min 到 :max KB之間',
        'string'  => ':attribute 必須在 :min 到 :max 個字符之間',
        'array'   => ':attribute 必須在 :min 到 :max 項之間',
    ],
    'boolean'              => ':attribute 字符必須是 true 或 false',
    'confirmed'            => ':attribute 二次輸入不相同',
    'date'                 => ':attribute必須是一个合法的日期',
    'date_format'          => ':attribute 與给定的格式 :format 不符合',
    'different'            => ':attribute 必須不同於:other',
    'digits'               => ':attribute必須是 :digits 位',
    'digits_between'       => ':attribute 必須在 :min and :max 位之間',
    'dimensions'           => ':attribute的圖片比例無效',
    'distinct'             => 'The :attribute欄位的值重複.',
    'email'                => ':attribute必須是一个合法的電子郵箱地址。',
    'exists'               => '選取的 :attribute 是無效的.',
    'file'                 => ':attribute 必須是一個檔案',
    'filled'               => ':attribute 屬性是必須的.',
    'image'                => ':attribute 必須是一個圖片 (jpeg, png, bmp 或者 gif)',
    'in'                   => '選定的 :attribute 是無效的',
    'in_array'             => ':attribute 欄位不存在於 :other裡頭',
    'integer'              => ':attribute 必須是個整數',
    'ip'                   => ':attribute 必須是一個合法的 IP 地址。',
    'json'                 => ':attribute 必須是合法的JSON字串',
    'max'                  => [
        'numeric' => ':attribute 的最大長度為:max位',
        'file'    => ':attribute 最大為:max KB',
        'string'  => ':attribute 的最大長度為:max字元',
        'array'   => ':attribute 的最大個數為:max個',
    ],
    'mimes'                => ':attribute 的文件類型必須是:values',
    'min'                  => [
        'numeric' => ':attribute的最小長度為:min位',
        'file'    => ':attribute 大小至少為:min KB',
        'string'  => ':attribute的最小長度為:min字元',
        'array'   => ':attribute 至少有 :min 項',
    ],
    'not_in'               => '選取的 :attribute 是無效的',
    'numeric'              => ':attribute 必須是數字',
    'present'              => ':attribute 欄位必須是存在的',
    'regex'                => ':attribute 格式無效',
    'required'             => ':attribute 欄位是必須的',
    'required_if'          => ':attribute 欄位是必須的當 :other 欄位是 :value.',
    'required_unless'      => ':attribute 欄位是必須的除非 :other 為這些 :values.',
    'required_with'        => ':attribute 欄位是必須的當 :values 是存在的',
    'required_with_all'    => ':attribute 欄位是必須的當 :values 都是存在的',
    'required_without'     => ':attribute 欄位是必須的當 :values 是不存在的',
    'required_without_all' => ':attribute 欄位是必須的當 :values 沒有半個存在',
    'same'                 => ':attribute和:other必須相符',
    'size'                 => [
        'numeric' => ':attribute 必須是 :size 位',
        'file'    => ':attribute 必須是 :size KB',
        'string'  => ':attribute 必須是 :size 个字符',
        'array'   => ':attribute 必須包括 :size 項',
    ],
    'string'               => ':attribute 必須是字串',
    'timezone'             => ':attribute 必須是个有效的時區',
    'unique'               => ':attribute 已經存在',
    'url'                  => ':attribute 格式不正確',

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
        'g-recaptcha-response' => [
            'required' => '請確認您不是機器人.',
            'captcha' => '驗證錯誤! 請刷新表單後重新上傳.',
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
        'chkPwd'        => '確認密碼',
        'newPwd'        => '密碼',
        'email'         => '電子郵箱',
        'username'      => '帳號',
        'password'      => '密碼',
        'serial'        => '商品序號',
        'lang'          => '語言',
        'name'          => '名稱',
        'price'         => '價格',
        'cabinet_no'    => '櫃號',
        'link'          => '連結',
        'image'         => '圖片',
        'code'          => '條碼',
        'en_name'       => '英文名字',
        'stock'         => '數量',
        'cgy_id'        => '商品類別',
        'company_id'    => '公司行號',
        'sort'          => '排序',
        'qty'           => '購買數量',
        'address'       => '地址',
        'manager'       => '管理者姓名',
        'contact'       => '聯絡電話',
        'guardLtd'      => '社區保全公司',
        'pic'           => '圖片',
        'title'         => '標題',
        'url'           => '網址',
        'owner_name'    => '收件人',
        'content'       => '內容',
        'fee'           => '費用',
        'contacter'     => '聯絡人',
        'mobile'        => '手機號碼',
        'type'          => '類型',
        'tags_list'     => '標籤',
        'mode'          => '模式',
        'mediums'       => '文章媒體',
        'subject'       => '主旨',
    ],

];
