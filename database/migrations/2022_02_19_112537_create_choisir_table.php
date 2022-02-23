<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoisirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('choisir', function (Blueprint $table) {
            $table->integer('idUtilisateur');
            $table->integer('idAnnonce')->index('FK_choisir_idAnnonce');

            $table->primary(['idUtilisateur', 'idAnnonce']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('choisir');
    }
}
