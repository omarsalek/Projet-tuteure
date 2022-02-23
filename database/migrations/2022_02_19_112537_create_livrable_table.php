<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivrableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livrable', function (Blueprint $table) {
            $table->integer('idAnnonce');
            $table->integer('idLieu')->index('FK_livrable_idLieu');

            $table->primary(['idAnnonce', 'idLieu']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livrable');
    }
}
