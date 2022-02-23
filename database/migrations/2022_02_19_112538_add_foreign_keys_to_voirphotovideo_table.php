<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVoirphotovideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('voirphotovideo', function (Blueprint $table) {
            $table->foreign(['idAnnonce'], 'FK_voirPhotoVideo_idAnnonce')->references(['idAnnonce'])->on('annonce');
            $table->foreign(['idPhoto'], 'FK_voirPhotoVideo_idPhoto')->references(['idPhoto'])->on('photovideo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('voirphotovideo', function (Blueprint $table) {
            $table->dropForeign('FK_voirPhotoVideo_idAnnonce');
            $table->dropForeign('FK_voirPhotoVideo_idPhoto');
        });
    }
}
