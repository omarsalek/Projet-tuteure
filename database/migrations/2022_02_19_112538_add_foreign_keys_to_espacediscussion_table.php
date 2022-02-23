<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEspacediscussionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('espacediscussion', function (Blueprint $table) {
            $table->foreign(['idAnnonce'], 'FK_espaceDiscussion_idAnnonce')->references(['idAnnonce'])->on('annonce');
            $table->foreign(['idUtilisateur'], 'FK_espaceDiscussion_idUtilisateur')->references(['idUtilisateur'])->on('utilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('espacediscussion', function (Blueprint $table) {
            $table->dropForeign('FK_espaceDiscussion_idAnnonce');
            $table->dropForeign('FK_espaceDiscussion_idUtilisateur');
        });
    }
}
