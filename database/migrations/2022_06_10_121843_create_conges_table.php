<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCongesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('conges', function (Blueprint $table) {
            $table->id();
            $table->timestamp('datedemandecong');
            $table->date('datedebutcong');
            $table->date('datefincong');
            $table->string('comentaire');
            $table->integer('nbjourcong');
            $table->integer('etat_id')->unsigned();
            $table->foreign('etat_id')->references('id')->on('etat');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('type');
            $table->integer('employe_id')->unsigned();
            $table->foreign('employe_id')->references('id')->on('employe');
            $table->integer('reponse_id')->unsigned();
            $table->foreign('reponse_id')->references('id')->on('reponse');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conges');
    }
}
