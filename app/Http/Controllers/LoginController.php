<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Request;

class LoginController extends Controller
{
    public function form(){
        return view('form_login');
    }

    public function login()
    {
        $credenciais = Request::only('email', 'password');
        if (Auth::attempt($credenciais)) {
            return "Usuario Esta Logado";
        }
        return "Usuario Nao esta Logado";
    }
}
