<?php

namespace App\Api\Controller;

use App\Service\Token;

class TokenController
{
    public function getCode()
    {
        $backurl = urlencode("http://a.mahuajiao.com");
        $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxbb60510a67a531e2&redirect_uri='+$backurl+'&response_type=code&scope=snsapi_base&state=STATE#wechat_redirect';
        header('Location: ' . $url);
        exit;

        $code = Token::getCode();
        return $code;
    }

    public function setCode()
    {
        $code = request('code');
        return $code;
    }
}