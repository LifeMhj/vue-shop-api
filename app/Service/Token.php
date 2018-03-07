<?php
namespace App\Service;

class Token
{
    public static function getCode()
    {
        // $url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxbb60510a67a531e2&redirect_uri=http://ab.nokexue.com&response_type=code&scope=snsapi_base&state=STATE#wechat_redirect';
        $url = 'http://a.mahuajiao.com/api/banner/1';
        $result = self::curl_get($url);
        return $result;
    }


    public static function curl_get($url, &$httpCode = 0)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //不做证书校验,部署在linux环境下请改为true
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        $file_contents = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $file_contents;
    }
}