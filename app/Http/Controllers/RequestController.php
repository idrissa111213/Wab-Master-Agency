<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;

class RequestController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'interests' => 'required|string|max:255',
            'attachment' => 'nullable|file|max:2048',
            'otherInterest' => 'nullable|string|max:255',
        ]);

        // Gestion de l'upload de la pièce jointe
        $documentPath = null;
        if ($request->hasFile('attachment')) {
            $documentPath = $request->file('attachment')->store('attachments', 'public');
        }

        // Création de la demande
        Demande::create([
            'titre' => $validatedData['subject'],
            'description' => $validatedData['message'],
            'categorie' => $validatedData['interests'],
            'autre_categorie' => $validatedData['otherInterest'] ?? null,
            'id_utilisateur' => auth()->id(),
            'document' => $documentPath ? file_get_contents(storage_path('app/public/' . $documentPath)) : null,
        ]);

        // Redirection avec message de succès
        return redirect()->back()->with('success', 'Votre demande a été soumise avec succès!');
    }

    public function index()
    {
        // Récupérer les demandes de l'utilisateur courant
        $demandes = Demande::where('id_utilisateur', auth()->id())->get();

        // Passer les données à la vue
        return view('layouts1.mes_demandes', compact('demandes'));
    }
}
