<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::post('/', 'LoginController@login');
Route::get('/home/{page?}', 'BackOfficeController@score');
Route::get('/ingame/{page?}', 'BackOfficeController@ingame');
Route::get('/waiting/{page?}', 'BackOfficeController@waiting');
Route::get('/inactive/{page?}', 'BackOfficeController@inactive');
Route::resource('player', 'PlayerController');

Route::get('/players', 'GetPlayersController@getPlayers'); //les joueurs
Route::get('/players/number/{number}', 'GetPlayersController@getNbPlayers'); // recuperer un certain nb de joueur
Route::get('/players/active', 'GetPlayersController@getPlayersActive'); // les joueurs actifs
Route::get('/players/inactive', 'GetPlayersController@getPlayersInactive'); // les joueurs inactifs
Route::get('/players/score/{page?}', 'GetPlayersController@getPlayersScore'); // les joueurs qui ont deja jouer
Route::get('/players/wait', 'GetPlayersController@getPlayersWait'); //les joueurs qui attendent de jouer
Route::get('/players/onGame', 'GetPlayersController@getPlayersOnGame'); //les joueurs qui jouent
Route::get('/players/timestamp', 'GetPlayersController@getPlayersTimestamp'); //timestamp (heure a laquelle les joueurs commence a jouer)
Route::get('/players/{email}/timestamp', 'GetPlayersController@getPlayersTimestampByEmail');// timestamp par email
Route::get('/players/email/{email}', 'GetPlayersController@getPlayersByEmail'); //joueur par email (unique)
Route::get('/players/numberOfPlayers', 'GetPlayersController@getNumberOfPlayers'); // nombre de joueur avec score et actif (unique)
