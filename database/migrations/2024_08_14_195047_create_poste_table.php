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
        Schema::create('poste', function (Blueprint $table) {
            $table->id('id_poste');
            $table->enum('categorie', [
                'Education', 'Santé', 'Emploi', 'Logement', 'Justice et Droits', 'Environnement', 
                'Culture et Loisirs', 'Entreprenariat et développement économique', 'Citoyenneté et citoyenne', 'Autre'
            ]);
            $table->string('autre_categorie')->nullable();
            $table->text('contenu');
            $table->foreignId('id_utilisateur')->constrained('users');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poste');
    }
};
