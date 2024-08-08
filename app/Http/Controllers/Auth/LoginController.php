<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Affiche le formulaire de login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Gère le processus de login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password',);

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $users = Auth::user();

            // Redirection en fonction du rôle de l'utilisateur
            switch ($users->idrole) {
                case 'admin':
                    return redirect()->route('admin.ventes');
                case 'caissier':
                    return redirect()->route('user.dashboard');
                case 'magazinier':
                    return redirect()->route('user.dashboard');
                // Ajoutez d'autres rôles si nécessaire
                // default:
                //     return redirect()->route('home');
            }
        }

        // Si l'authentification échoue
        return redirect()->back()->withErrors([
            'email' => 'Les informations d\'identification fournies sont incorrectes.',
        ]);
    }

    /**
     * Déconnecte l'utilisateur.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
