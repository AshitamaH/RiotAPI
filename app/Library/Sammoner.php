<?php
//厳格な型付けの宣言　注：効力はこのファイルのみ
declare(strict_types=1);

namespace App\Library;


class Sammoner
{
    /**
     * Sammonerクラス
     * @author Hayashida.A
     */
    private $id;
    private $accountId;
    private $puuid;
    private $name;
    private $profileIconId;
    private $revisionDate;
    private $summonerLevel;


    public function testGetter(string $id)
    {
        $this->$id = $id;
        var_dump($id);
        return $id;
    }

    public static function testView()
    {
        $url = "https://jp1.api.riotgames.com/lol/summoner/v4/summoners/by-name/Mashua?api_key=RGAPI-f4bc1567-6bc8-4333-9b82-67aebb076a53";
        //file_get_contents()でURLから文字列取得
        $json = file_get_contents($url);
        $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        //連想配列にデコードする
        $arr = json_decode($json, true);
    }
    public static function setRoutingValues($platform)
    {
    }
}
var_dump(Sammoner::setRoutingValues($platform = "jp1"));
