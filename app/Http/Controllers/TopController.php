<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * Summoner名受け取り&RiotAPI呼び出し
     */
    public function serchSammonerName()
    {
        return view('top');
    }
}
