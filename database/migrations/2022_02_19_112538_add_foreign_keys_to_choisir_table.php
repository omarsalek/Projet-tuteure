<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToChoisirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('choisir', function (Blueprint $table) {
            $table->foreign(['idAnnonce'], 'FK_choisir_idAnnonce')->references(['idAnnonce'])->on('annonce');
            $table->foreign(['idUtilisateur'], 'FK_choisir_idUtilisateur')->references(['idUtilisateur'])->on('utilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('choisir', function (Blueprint $table) {
            $table->dropForeign('FK_choisir_idAnnonce');
            $table->dropForeign('FK_choisir_idUtilisateur');
        });
    }
}
