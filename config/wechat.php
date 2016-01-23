<?php
return [
    'use_alias'    => env('WECHAT_USE_ALIAS', false),
    'app_id'       => env('WECHAT_APPID', 'wxc27f5a2b457b83d3'), // 必填
    'secret'       => env('WECHAT_SECRET', 'a252b31f880d3dedcb0c9ac23350fb9c'), // 必填
    'token'        => env('WECHAT_TOKEN', 'tmygweixin'),  // 必填
    'encoding_key' => env('WECHAT_ENCODING_KEY', 'NMuSPOEuNJBZTZf9FWJ6I1dya18nKsz8PTPiiCCzFBE') // 加密模式需要，其它模式不需要
];