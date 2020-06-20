<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotes', function (Blueprint $table) {
            $table->bigIncrements('Id_Hote');
            $table->string('Nom_Magasin');
            $table->string('Adresse');
            $table->string('Tel');
            $table->string('Responsable');
            $table->string('mot_de_passe');
            $table->string('horaire');
            $table->Integer('nbr_place_dispo');
            $table->mediumText('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotes');
    }
}
