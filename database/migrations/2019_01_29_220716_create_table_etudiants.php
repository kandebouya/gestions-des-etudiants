<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEtudiants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricule');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('adresselocal');
            $table->integer('niveau_id')->unsigned();
            $table->string('birthday');
            $table->integer('age');
            $table->string('email');
            $table->string('tel');
            

            $table->foreign('niveau_id')->references('id')->on('niveaux')->onDelete('restrict')  ->onUpdate('restrict');


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
        Schema::dropIfExists('etudiants');
    }
}
