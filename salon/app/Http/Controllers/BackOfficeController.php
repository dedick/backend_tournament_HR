<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class BackOfficeController extends Controller
{
    private $displayPerPage = 15;
    private $nbPage = 0;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function score($page = 0)
    {
        $count = DB::table('players')->whereNotNull('level')->whereNotNull('active')->count();
        $this->nbPage = round($count / $this->displayPerPage);
        $player = DB::table('players')->whereNotNull('level')->whereNotNull('active')->forPage($page, $this->displayPerPage)->orderBy('level', 'desc')->get();
        return view('welcome')->with('player', $player)->with('title', 'Score')->with('nbPage', $this->nbPage)->with('action', 'score');
    }
    public function waiting($page = 0)
    {
        $count = DB::table('players')->whereNull('level')->whereNotNull('active')->where('onGame', NULL)->count();
        $this->nbPage = round($count / $this->displayPerPage);
        $player = DB::table('players')->whereNull('level')->whereNotNull('active')->where('onGame', NULL)->forPage($page, $this->displayPerPage)->get();
        return view('welcome')->with('player', $player)->with('title', 'Waiting')->with('nbPage', $this->nbPage)->with('action', 'waiting');
    }
    public function ingame($page = 0)
    {
        $count = DB::table('players')->where('onGame', 'checked')->whereNotNull('active')->count();
        $this->nbPage = round($count / $this->displayPerPage);
        $player = DB::table('players')->where('onGame', 'checked')->whereNotNull('active')->forPage($page, $this->displayPerPage)->get();
        return view('welcome')->with('player', $player)->with('title', 'InGame')->with('nbPage', $this->nbPage)->with('action', 'ingame');
    }
    public function inactive($page = 0)
    {
        $count = DB::table('players')->whereNull('active')->whereNotNull('active')->count();
        $this->nbPage = round($count / $this->displayPerPage);
        $player = DB::table('players')->whereNull('active')->whereNull('active')->forPage($page, $this->displayPerPage)->get();
        return view('welcome')->with('player', $player)->with('title', 'Inactive')->with('nbPage', $this->nbPage)->with('action', 'inactive');
    }


}
