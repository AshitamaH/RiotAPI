<?php

namespace App\Http\Controllers;

use App\Library\Common;
use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * Summoner名受け取り&RiotAPI呼び出し
     */
    public function searchSammonerName(Request $request)
    {
        $region = $request->input('region');
        $summoner_name = $request->input('summoner-name');
        $url = Common::generateUrl($region, $summoner_name);
        //HTTPコードが200以外の時の条件分岐が必要：未実装
        $data = Common::callApi($url);
        // 配列型
        // return view('top', compact('data'));
        // 配列型 「※Laravelでは、ビューに変数を渡すときに、配列の形式でキー名と値をセットして渡すことができます。」
        return view('top', ['data' => $data]);
        // 連想配列型 ※何故かissetでの存在確認が出来ない　今度↑の仕様を変数名変えて試した方がいい
        // return view('top', $data);
    }
}
