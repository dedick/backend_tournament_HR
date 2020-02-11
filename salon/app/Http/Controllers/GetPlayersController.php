<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Player;

class GetPlayersController extends Controller
{
    public function getPlayers()
    {
        //
        return Player::orderBy('level', 'desc')->get();
    }    
    
    public function getNbPlayers($number)
    {
        //
        return Player::orderBy('level', 'desc')->take($number)->get();
    } 

    public function getPlayersActive()
    {
        //
        return Player::whereNotNull('active')->get();
    } 
    
    public function getPlayersInactive()
    {
        //
        return Player::whereNull('active')->get();
    } 
    
    public function getPlayersScore($page = 0)
    {
        return Player::whereNotNull('level')->whereNotNull('active')->orderBy('level', 'desc')->forPage($page, 50)->select('id','firstname', 'lastname', 'email', 'level', 'school')->get();
    }   
    
    public function getPlayersWait()
    {
        return Player::whereNull('level')->whereNotNull('active')->get();
    }   
    
    public function getPlayersOnGame()
    {
        return Player::whereNotNull('active')->whereNotNull('onGame')->select('id', 'firstname', 'lastname', 'email', 'laptop', 'timestamp')->get();
    } 

    public function getPlayersTimestamp()
    {
        return Player::whereNotNull('timestamp')->whereNotNull('active')->select('firstname', 'lastname', 'email', 'timestamp')->get();
    } 
    
    public function getPlayersTimestampByEmail($email)
    {
        return Player::where('email', '=', $email)->select('firstname', 'lastname', 'email', 'timestamp')->get();
    } 

    public function getPlayersByEmail($email)
    {
        return Player::where('email', '=', $email)->get();
    }

    public function getNumberOfPlayers()
    {
        return Player::whereNotNull('active')->whereNotNull('level')->get()->count();
    }
}
