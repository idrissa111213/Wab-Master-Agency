<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\AdminController; 
use App\Http\Controllers\RequestController;

// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

// Route pour la page adhérer
Route::get('/adhérer', function () {
    return view('adhérer');
})->name('adhérer');

// Routes pour l'authentification avec Google
Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

// Route pour la soumission de demandes
Route::get('/soumissiondemande', function () {
    return view('soumissiondemande');
})->name('soumissiondemande');



Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Route pour le tableau de bord utilisateur
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





// Routes pour les layouts 

Route::get('/layouts1/base', function () {
    return view('layouts1.base');
})->name('layouts1.base');
Route::get('/layouts1/mes_demandes', [RequestController::class, 'index'])->name('layouts1.mes_demandes');

Route::get('/layouts1/vote', function () {
    return view('layouts1.mes_votes');
})->name('layouts1.mes_votes');

Route::get('/layouts1/moncompte', function () {
    return view('layouts1.moncompte');
})->name('layouts1.moncompte');

Route::get('/layouts1/poster_probleme', function () {
    return view('layouts1.poster_probleme');
})->name('layouts1.poster_probleme');

Route::get('/layouts1/soumettre_demande', function () {
    return view('layouts1.soumettre_demande');
})->name('layouts1.soumettre_demande');

Route::get('/layouts1/condition_d_utilisations', function () {
    return view('layouts1.condition_d_utilisations');
})->name('layouts1.condition_d_utilisations');

Route::get('/layouts1/documentation', function () {
    return view('layouts1.documentation');
})->name('layouts1.documentation');

Route::get('/layouts1/faq', function () {
    return view('layouts1.faq');
})->name('layouts1.faq');

Route::get('/layouts1/Contactez_nous', function () {
    return view('layouts1.Contactez_nous');
})->name('layouts1.Contactez_nous');

Route::get('/layouts1/sedéconnecter', function () {
    return view('layouts1.sedéconnecter');
})->name('layouts1.sedéconnecter');



// User (bar item) 
Route::get('/layouts1/profil', function () {
    return view('layouts1.profil');
})->name('layouts1.profil');




Route::post('/demande/soumettre', [RequestController::class, 'store'])->name('demande.store');
