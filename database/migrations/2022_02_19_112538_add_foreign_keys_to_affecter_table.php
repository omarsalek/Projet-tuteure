<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAffecterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('affecter', function (Blueprint $table) {
            $table->foreign(['idAnnonce'], 'FK_affecter_idAnnonce')->references(['idAnnonce'])->on('annonce');
            $table->foreign(['idUtilisateur'], 'FK_affecter_idUtilisateur')->references(['idUtilisateur'])->on('utilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('affecter', function (Blueprint $table) {
            $table->dropForeign('FK_affecter_idAnnonce');
            $table->dropForeign('FK_affecter_idUtilisateur');
        });
    }
}
