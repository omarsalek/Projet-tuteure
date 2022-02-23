<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIdentifiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('identifiants', function (Blueprint $table) {
            $table->foreign(['idUtilisateur'], 'FK_identifiants_idUtilisateur')->references(['idUtilisateur'])->on('utilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('identifiants', function (Blueprint $table) {
            $table->dropForeign('FK_identifiants_idUtilisateur');
        });
    }
}
