<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAnnonceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('annonce', function (Blueprint $table) {
            $table->foreign(['idVetement'], 'FK_annonce_idVetement')->references(['idVetement'])->on('vetementchaussure');
            $table->foreign(['idLieu'], 'FK_annonce_idLieu')->references(['idLieu'])->on('lieu');
            $table->foreign(['idUtilisateur'], 'FK_annonce_idUtilisateur')->references(['idUtilisateur'])->on('utilisateur');
            $table->foreign(['idMateriel'], 'FK_annonce_idMateriel')->references(['idMateriel'])->on('materiels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('annonce', function (Blueprint $table) {
            $table->dropForeign('FK_annonce_idVetement');
            $table->dropForeign('FK_annonce_idLieu');
            $table->dropForeign('FK_annonce_idUtilisateur');
            $table->dropForeign('FK_annonce_idMateriel');
        });
    }
}
