<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnonceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce', function (Blueprint $table) {
            $table->integer('idAnnonce', true);
            $table->string('type', 25)->nullable();
            $table->date('date')->nullable();
            $table->integer('etatAnnonce')->nullable();
            $table->text('photoAnnonce')->nullable();
            $table->integer('id')->index('FK_annonce_id');
            $table->integer('idVetement')->nullable()->index('FK_annonce_idVetement');
            $table->integer('idMateriel')->nullable()->index('FK_annonce_idMateriel');
            $table->integer('idLieu')->nullable()->index('FK_annonce_idLieu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonce');
    }
}
