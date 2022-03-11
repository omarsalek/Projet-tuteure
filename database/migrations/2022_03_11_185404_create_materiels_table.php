<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiels', function (Blueprint $table) {
            $table->integer('idMateriel', true);
            $table->string('titre', 250)->nullable();
            $table->string('marque', 25);
            $table->smallInteger('ageMat');
            $table->string('etatMat', 25)->nullable();
            $table->text('descriptionMat')->nullable();
            $table->integer('idAnnonce')->nullable()->index('FK_materiels_idAnnonce');
            $table->integer('idTypMat')->index('FK_materiels_idTypMat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materiels');
    }
}
