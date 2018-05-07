<?php

namespace App\Http\Middleware;

use Closure;

class Autorizador
{
    /**
     * É feito a verificacao se o usuario esta logado, caso nao esteja ele nega a requisao
     * e vai para a barra login.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->is('login') && \Auth::guest()) {
            return redirect('/login');
        }
        return $next($request);
    }
}
