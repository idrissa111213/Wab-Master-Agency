<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // Vérifiez si l'utilisateur est un administrateur
        if (Auth::user()->is_admin) {
            // Retourne la vue 'admin.dashboard' pour les administrateurs
            return view('admin.dashboard');
        }

        // Retourne la vue 'dashboard' pour les utilisateurs simples
        return view('dashboard');
    }
}
