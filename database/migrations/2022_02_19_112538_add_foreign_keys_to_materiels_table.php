<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMaterielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('materiels', function (Blueprint $table) {
            $table->foreign(['idAnnonce'], 'FK_materiels_idAnnonce')->references(['idAnnonce'])->on('annonce');
            $table->foreign(['idTypMat'], 'FK_materiels_idTypMat')->references(['idTypMat'])->on('typemateriel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materiels', function (Blueprint $table) {
            $table->dropForeign('FK_materiels_idAnnonce');
            $table->dropForeign('FK_materiels_idTypMat');
        });
    }
}
