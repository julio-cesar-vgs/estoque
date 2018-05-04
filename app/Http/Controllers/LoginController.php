<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{
    public function form()
    {
        return view('form_login');
    }

    public function login()
    {
        $credenciais = Request::only('email', 'password');

        if (Auth::attempt($credenciais)) {
            return 'Usuario esta logado com sucesso';
        }
        return 'usuario nao esta logado';
    }
}
