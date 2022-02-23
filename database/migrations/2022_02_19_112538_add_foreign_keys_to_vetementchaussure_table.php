<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVetementchaussureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vetementchaussure', function (Blueprint $table) {
            $table->foreign(['idAnnonce'], 'FK_VetementChaussure_idAnnonce')->references(['idAnnonce'])->on('annonce');
            $table->foreign(['idTypVet'], 'FK_VetementChaussure_idTypVet')->references(['idTypVet'])->on('typevetementchaussure');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vetementchaussure', function (Blueprint $table) {
            $table->dropForeign('FK_VetementChaussure_idAnnonce');
            $table->dropForeign('FK_VetementChaussure_idTypVet');
        });
    }
}
