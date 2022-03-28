<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspacediscussionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espacediscussion', function (Blueprint $table) {
            $table->integer('idMessage', true);
            $table->string('nomUtilisateur', 250)->nullable();
            $table->text('contenu')->nullable();
            $table->text('photo')->nullable();
            $table->date('DatePublication');
            $table->integer('idAnnonce')->nullable()->index('FK_espaceDiscussion_idAnnonce');
            $table->integer('id')->index('FK_espaceDiscussion_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espacediscussion');
    }
}
