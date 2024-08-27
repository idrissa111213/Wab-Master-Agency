<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $table = 'demande';

    protected $fillable = [
        'titre',
        'description',
        'categorie',
        'autre_categorie',
        'date_soumission',
        'statut',
        'id_utilisateur',
        'document',
        'id_categorie',
    ];

    // Relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_utilisateur');
    }
}
