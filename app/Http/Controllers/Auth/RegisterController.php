<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request ;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;



class RegisterController extends Controller
{

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

     /**
     * Met à jour le mot de passe de l'utilisateur et redirige en fonction du rôle.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */

    public function register(Request $request)
    {
        // Valider les données de la requête
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Trouver l'utilisateur par email
        $users = User::where('email', $request->input('email'))->first();

        if ($users) {
            // Mettre à jour le mot de passe
            $users->password = Hash::make($request->input('password'));
            $users->save();

        //     // Rediriger vers la page correspondant au rôle de l'utilisateur
            switch ($users->idrole) {
                case 'admin':
                    return redirect()->route('admin.ventes')->with('success', 'Mot de passe mis à jour avec succès.');
                case 'caissier':
                    return redirect()->route('bilan_vente.blade.php')->with('success', 'Mot de passe mis à jour avec succès.');
                case 'magasinier':
                    return redirect()->route('magasinier.dashboard')->with('success', 'Mot de passe mis à jour avec succès.');
                default:
                    return redirect()->route('home')->with('success', 'Mot de passe mis à jour avec succès.');
            }
        }

        // Si l'utilisateur n'existe pas, rediriger vers la page d'accueil avec un message d'erreur
        return redirect()->route('home')->with('error', 'Utilisateur non trouvé.');
    }



}
