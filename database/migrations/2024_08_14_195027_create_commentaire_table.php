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
        Schema::create('commentaire', function (Blueprint $table) {
            $table->id('id_commentaire');
            $table->dateTime('date_publication')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('contenu');
            $table->foreignId('id_utilisateur')->constrained('users');
            $table->foreignId('id_demande')->constrained('demande');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaire');
    }
};
