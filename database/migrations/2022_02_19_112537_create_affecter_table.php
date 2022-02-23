<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAffecterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affecter', function (Blueprint $table) {
            $table->integer('idAnnonce');
            $table->integer('idUtilisateur')->index('FK_affecter_idUtilisateur');

            $table->primary(['idAnnonce', 'idUtilisateur']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affecter');
    }
}
