<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!isset($_COOKIE["authentificated"]))
            return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!isset($_COOKIE["authentificated"]))
          return redirect('/');
        return view('create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!isset($_COOKIE["authentificated"]))
          return redirect('/');
        if ($request->get('active') == NULL)
            $active = NULL;
        else
            $active = "checked";

        if ($request->get('onGame') == NULL){
            $onGame = NULL;
            $timestamp = NULL;
        }
        else {
           $onGame = "checked";
           date_default_timezone_set('Europe/Paris');
           $timestamp =  date('Y-m-d H:i:s',  time());
        }
  

        $email = DB::table('players')->where('email', $request->get('email'))->get();
        
        if (count($email) == 0 && $request->get('firstname') != NULL){
            DB::table('players')->insert(
                array('firstname' => $request->get('firstname'), 'lastname' =>  $request->get('lastname'), 'birthday' => $request->get('birthday'), 'email' =>  $request->get('email'), 'phone' =>  $request->get('phone'), 'school' =>  $request->get('school'), 'studies' => $request->get('studies'), 'active' => $active, 'laptop' => $request->get('laptop'), 'level' => $request->get('level'), 'onGame' => $onGame, 'timestamp' => $timestamp)
            );
        } else {
            return redirect('/player/create');
        }
        return redirect('/home');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if (!isset($_COOKIE["authentificated"]))
            return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!isset($_COOKIE["authentificated"]))
            return redirect('/');
        $player = DB::select('select * from players where id = :id', ['id' => $id]);
         return view("edit", ['firstname' => $player[0]->firstname,
                              'lastname' => $player[0]->lastname,
                              'birthday' => $player[0]->birthday,                            
                              'email' => $player[0]->email,
                              'phone' => $player[0]->phone,
                              'school' => $player[0]->school,
                              'studies' => $player[0]->studies,
                              'active' => $player[0]->active,
                              'laptop' => $player[0]->laptop,
                              'level' => $player[0]->level,
                              'onGame' => $player[0]->onGame,
                              'comment'=> $player[0]->comment,
                              'id' => $id ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        
        if (!isset($_COOKIE["authentificated"]))
            return redirect('/');
        if ($request->get('active') == NULL)
            $active = NULL;
        else 
         $active = "checked";
        
        if ($request->get('onGame') == NULL){
            $onGame = NULL;
            $timestamp = NULL;
        }
         else {
            $onGame = "checked";
            date_default_timezone_set('Europe/Paris');
            $timestamp =  date('Y-m-d H:i:s',  time());
        }

        if ($request->get('level') != NULL)
            $onGame = 'null';
        
        DB::table('players')
            ->where('id', $id)
            ->update(['firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'birthday' => $request->birthday,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'school' => $request->school,
                    'studies' => $request->studies,
                    'active' => $active,
                    'laptop' => $request->laptop,
                    'level' => $request->level,
                    'onGame' => $onGame,
                    'timestamp' => $timestamp,
                    'comment' => $request->comment]);

        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (!isset($_COOKIE["authentificated"]))
            return redirect('/');
    }
}
