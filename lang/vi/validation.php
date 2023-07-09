<?php

return [

    'required' => ':attribute là bắt buộc',
    'min' => [
        'file' => 'The :attribute không được nhỏ hơn :min KB.',
        'numeric' => 'The :attribute không được nhỏ hơn :min.',
        'string' => 'The :attribute không được nhỏ hơn :min ký tự.',
    ],

    'max' => [
        'file' => 'The :attribute không được lớn hơn :min KB.',
        'numeric' => 'The :attribute không được lớn hơn :min.',
        'string' => 'The :attribute không được lớn hơn :min ký tự.',
    ],

    'attributes' => [
        "ten_danh_muc" => "Tên danh mục",
        "name" => "Tên",
        "password" => "Mật khẩu",
        "cf_password" => "Xác nhận mật khẩu",
        "email" => "Email",
    ],

    'same' => 'The :attribute và :other không khớp.',

    'unique' => 'The :attribute đã tồn tại trong hệ thống.',
];
