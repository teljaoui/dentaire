<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DentaireController extends Controller
{
    public function login_post(Request $request)
    {
        // Validation des champs
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->regenerate();
            $request->session()->put('loginId', $user->id);
            return redirect('/admin')->with('success', 'Welcome back admin, login successful.');
        }

        return back()->withErrors([
            'email' => "Email ou mot de passe incorrect."
        ])->withInput();
    }

    public function logout()
    {
        Session::flush(); // Détruit toutes les sessions
        return redirect('/admin/login');
    }
}
