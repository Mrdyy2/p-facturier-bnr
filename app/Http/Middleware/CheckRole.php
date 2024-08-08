<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$roles
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            // Si l'utilisateur n'est pas connecté
            return redirect('/login');
        }

        $userRole = Auth::user()->idrole;

        // Vérifie si le rôle de l'utilisateur est dans la liste des rôles autorisés
        if (!in_array($userRole, $roles)) {
            // Si l'utilisateur n'a pas l'un des rôles requis
            return redirect('/unauthorized');
        }

        return $next($request);
    }
}
