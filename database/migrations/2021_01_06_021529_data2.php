<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Data2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructeurs', function (Blueprint $table) {
            $table->id('numéro');
            $table->integer('id_proprietaire')->unsigned()->nullable() ;
            $table->foreign('id_proprietaire')->references('numéro')->on('Propriétaire ') ;

        });



        Schema::create('garages', function (Blueprint $table) {
            $table->id('num_garage');
            $table->integer('num-reg-commerce');
            $table->integer('id_proprietaire')->unsigned()->nullable();
            $table->foreign('id_proprietaire')->references('numéro')->on('Propriétaire ');
        } );

        Schema::create('personne_prives', function (Blueprint $table) {
            $table->id('id_pp');
            $table->integer('id_proprietaire')->unsigned()->nullable() ;
            $table->foreign('id_proprietaire')->references('numéro')->on('Propriétaire ') ;
        });

        Schema::create('G/PPs', function (Blueprint $table) {
            $table->id('numéro');
            $table->integer('id_garage')->unsigned()->nullable() ;
            $table->foreign('id_garage')->references('num_garage')->on('garages') ;
            $table->integer('id_pp')->unsigned()->nullable() ;
            $table->foreign('id_pp')->references('id_pp')->on('personne_prives') ;

        });

        Schema::create('vehicules', function (Blueprint $table) {
            $table->id('num_enregistrement');
        });

        Schema::create('Concessionnaire', function (Blueprint $table) {
            $table->integer('Numéro_cons')->unsigned()->nullable() ;
            $table->foreign('Numéro_cons')->references('numéro')->on('constructeurs') ;
            $table->integer('numéro_garage')->unsigned()->nullable() ;
            $table->foreign('numéro_garage')->references('num_garage')->on('garages') ;
        });

        Schema::create('Première_vente', function (Blueprint $table) {
            $table->integer('Numéro_cons')->unsigned()->nullable() ;
            $table->foreign('Numéro_cons')->references('numéro')->on('constructeurs') ;
            $table->integer('numéro_véhicule')->unsigned()->nullable() ;
            $table->foreign('numéro_véhicule')->references('num_enregistrement')->on('vehicules') ;
            $table->integer('numéro_garage')->unsigned()->nullable() ;
            $table->foreign('numéro_garage')->references('num_garage')->on('garages') ;
        });

        Schema::create('achat', function (Blueprint $table) {
            $table->integer('numéro_garage')->unsigned()->nullable() ;
            $table->foreign('numéro_garage')->references('num_garage')->on('garages') ;

            $table->integer('numéro_véhicule')->unsigned()->nullable() ;
            $table->foreign('numéro_véhicule')->references('num_enregistrement')->on('vehicules') ;

            $table->integer('num')->unsigned()->nullable() ;
            $table->foreign('num')->references('id_pp')->on('personne_prives') ;
            $table->date('date');
            $table->integer('prix');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
