<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
    public function authenticate(Request $request){
        // Retrive Input
        $credentials = $request->only('identifiant', 'password');

        if (Auth::attempt($credentials)) {
            // if success login

            return redirect('accueil');

            //return redirect()->intended('/details');
        }
        // if failed login
        return redirect('login');
    }
}