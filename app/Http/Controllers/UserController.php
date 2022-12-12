<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function login(Request $req){
        $user = User::where(['email' => $req->email])->first();
        error_log($user);

        /* IL METODO check RICHIEDE 2 ARGOMENTI:
        IL PRIMO VIENE DAL REQUEST DEL FORM E IL SECONDO DAL DATABASE */
        if(!$user || Hash::check($req->password, $user->password)){
            return 'Username or password not correct';
        } else {
            $req->session()->put('user', $user);
            return redirect('/landing');
        }
    }
}
