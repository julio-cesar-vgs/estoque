<?php

namespace App\Http\Controllers;

use Auth;
use Request;

class LoginController extends Controller
{
    /**
     * Redireciona no formulario.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function form(){
        return view('form_login');
    }

    /**
     * Funcao para acessar o Login
     *
     * @return string
     */
    public function login()
    {
        $credenciais = Request::only('email', 'password');
        if (Auth::attempt($credenciais)) {
            return redirect('/produtos');
        }
        return redirect('/login');
    }
}
