<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentifiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identifiants', function (Blueprint $table) {
            $table->integer('idLogin', true);
            $table->string('login', 25)->unique('login');
            $table->text('password');
            $table->integer('idUtilisateur')->index('FK_identifiants_idUtilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('identifiants');
    }
}
