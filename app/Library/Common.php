<?php

namespace App\Library;

/**
 * 共通クラス
 * @author Hayashida.A
 */

class Common
{

    public static function generateUrl($region, $summonerName)
    {
        $domain = "api.riotgames.com";
        //APIkeyをクエリで送るの不味いので修正予定、configを経由するらしい
        //↓固定値で送っているため期限切れたら変更
        $apiKey = "RGAPI-f4bc1567-6bc8-4333-9b82-67aebb076a53";

        $url = "https://" . $region . '.';
        $url = $url . $domain;
        $url = $url . "/lol/summoner/v4/summoners/by-name/";
        $url = $url . $summonerName;
        $url = $url . "?api_key=" . $apiKey;
        return $url;
    }


    /**
     * Undocumented function
     *
     * @param [type] $url URL
     * @return void
     */
    public static function callApi($url)
    {
        $json = file_get_contents($url);
        // $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $data = json_decode($json, true);
        return $data;
    }
}
// var_dump(compact(Common::callApi('https://jp1.api.riotgames.com/lol/summoner/v4/summoners/by-name/Mashua?api_key=RGAPI-f4bc1567-6bc8-4333-9b82-67aebb076a53')));
// var_dump(Common::callApi('https://jp1.api.riotgames.com/lol/summoner/v4/summoners/by-name/Mashua?api_key=RGAPI-f4bc1567-6bc8-4333-9b82-67aebb076a53'));
