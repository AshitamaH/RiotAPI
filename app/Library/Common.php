<?php

namespace App\Library;

/**
 * 共通クラス
 * @author Hayashida.A
 */

class Common
{
    /**
     * Undocumented function
     *
     * @param [type] $platform
     * @param [type] $apiType
     * @param [type] $param
     * @return void
     */
    public static function generateUrl($platform, $apiType, $param)
    {
        $domain = "api.riotgames.com";
        //APIkeyをクエリで送るの不味いので修正予定、configを経由するらしい
        //↓固定値で送っているため期限切れたら変更
        $apiKey = "RGAPI-d9f1f635-a69c-4cab-8dcc-0bd4870fcf7d";
        $url = "https://" . $platform . "." . $domain . "/" . $apiType . "/" . $param . "?api_key=" . $apiKey;
        return $url;
    }

    public static function callApi($url)
    {
        $json = file_get_contents($url);
        $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        return $json;
    }
}


// var_dump(Common::generateUrl($p = "jp1", $t = "lol/summoner/v4/summoners/by-name", $p = "Mashua"));
var_dump(Common::callApi(Common::generateUrl($p = "jp1", $t = "lol/summoner/v4/summoners/by-name", $p = "Mashua")));