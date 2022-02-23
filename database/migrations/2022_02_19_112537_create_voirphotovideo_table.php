<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoirphotovideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voirphotovideo', function (Blueprint $table) {
            $table->integer('idAnnonce');
            $table->integer('idPhoto')->index('FK_voirPhotoVideo_idPhoto');

            $table->primary(['idAnnonce', 'idPhoto']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voirphotovideo');
    }
}
