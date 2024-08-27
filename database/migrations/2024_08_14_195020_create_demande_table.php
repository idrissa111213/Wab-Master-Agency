<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('demande', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->text('description');
            $table->enum('categorie', [
                'Education', 'Santé', 'Emploi', 'Logement', 'Justice et Droits', 'Environnement', 
                'Culture et Loisirs', 'Entreprenariat et développement économique', 'Citoyenneté et citoyenne', 'Autre'
            ]);
            $table->string('autre_categorie')->nullable();
            $table->dateTime('date_soumission')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->enum('statut', ['ouvert', 'en cours', 'résolu'])->default('ouvert');
            $table->foreignId('id_utilisateur')->constrained('users');
            $table->binary('document')->nullable();
            $table->timestamps(); // Ajouter cette ligne pour les colonnes created_at et updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demande');
    }
};
