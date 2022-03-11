<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVetementchaussureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vetementchaussure', function (Blueprint $table) {
            $table->integer('idVetement', true);
            $table->string('categorie', 250)->nullable();
            $table->string('marque', 250)->nullable();
            $table->string('couleur', 250);
            $table->string('taille', 250);
            $table->string('saison', 250)->nullable();
            $table->string('etatVetChaus', 25)->nullable();
            $table->text('description')->nullable();
            $table->integer('idAnnonce')->nullable()->index('FK_VetementChaussure_idAnnonce');
            $table->integer('idTypVet')->nullable()->index('FK_VetementChaussure_idTypVet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vetementchaussure');
    }
}
