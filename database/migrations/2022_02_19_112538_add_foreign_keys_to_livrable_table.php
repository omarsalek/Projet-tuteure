<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLivrableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('livrable', function (Blueprint $table) {
            $table->foreign(['idAnnonce'], 'FK_livrable_idAnnonce')->references(['idAnnonce'])->on('annonce');
            $table->foreign(['idLieu'], 'FK_livrable_idLieu')->references(['idLieu'])->on('lieu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('livrable', function (Blueprint $table) {
            $table->dropForeign('FK_livrable_idAnnonce');
            $table->dropForeign('FK_livrable_idLieu');
        });
    }
}
