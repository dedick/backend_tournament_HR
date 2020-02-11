<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Player;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        //
        if ($request->email == "admin@epitech.eu" && $request->password == "epitechBcn")
        {
            setcookie("authentificated", "true", time() + (86400 * 30), "/");
            return redirect('/home');
        }
        else
        {
            return view('login');
        }
    }

}
