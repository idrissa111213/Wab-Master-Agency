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
        Schema::create('vote', function (Blueprint $table) {
            $table->id('id_vote');
            $table->foreignId('id_utilisateur')->constrained('users');
            $table->foreignId('id_demande')->constrained('demande');
            $table->boolean('valeur');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote');
    }
};
