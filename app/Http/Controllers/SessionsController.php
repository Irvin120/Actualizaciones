<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){ //Vista
        return view('auth.login');
    }

    public function store(){ //Login
        if (auth()->attempt(request(['email','password'])) == false) {
            return back()->withErrors([
                'message'=>'Contraseña o Correo Incorrectos'
            ]);
        } 
        
        return redirect()->to('/');
    }


    public function destroy(){//Cerrar Sesión
        auth()->logout();
        return redirect()->to('/login');
    }
}
