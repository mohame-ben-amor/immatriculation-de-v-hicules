<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Db extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Propriétaire ', function (Blueprint $table) {
            $table->id('numéro');
            $table->string('nom') ;
            $table->string('adreese') ;
        });
        /*
        Schema::create('Constructeur ', function (Blueprint $table) {
            $table->id('numéro');
            $table->integer('id_proprietaire')->unsigned()->nullable() ;
            $table->foreign('id_proprietaire')->references('numéro')->on('Propriétaire') ;
            $table->integer('nom_proprietaire')->unsigned()->nullable() ;
            $table->foreign('nom_proprietaire')->references('nom')->on('Propriétaire') ;
            $table->integer('adreese_proprietaire')->unsigned()->nullable() ;
            $table->foreign('adreese_proprietaire')->references('adreese')->on('Propriétaire') ;
        });

        Schema::create('G/PP ', function (Blueprint $table) {
            $table->id('numéro');
            $table->integer('id_proprietaire')->unsigned()->nullable() ;
            $table->foreign('id_proprietaire')->references('numéro')->on('Propriétaire') ;
            $table->integer('nom_proprietaire')->unsigned()->nullable() ;
            $table->foreign('nom_proprietaire')->references('nom')->on('Propriétaire') ;
            $table->integer('adreese_proprietaire')->unsigned()->nullable() ;
            $table->foreign('adreese_proprietaire')->references('adreese')->on('Propriétaire') ;
        });

        Schema::create('Garage ', function (Blueprint $table) {
            $table->id('num-reg-commerce');
            $table->integer('id_G/PP')->unsigned()->nullable() ;
            $table->foreign('id_G/PP')->references('numéro')->on('G/PP') ;
        });

        Schema::create('Personne_privé', function (Blueprint $table) {
            $table->id('Prénom');
            $table->integer('id_G/PP')->unsigned()->nullable() ;
            $table->foreign('id_G/PP')->references('numéro')->on('G/PP') ;
        });

        Schema::create('vehicules', function (Blueprint $table) {
            $table->id('num_enregistrement');
        });

        Schema::create('Concessionnaire  ', function (Blueprint $table) {
            $table->integer('Numéro_cons')->unsigned()->nullable() ;
            $table->foreign('Numéro_cons')->references('numéro')->on('Constructeur') ;
            $table->integer('numéro garage')->unsigned()->nullable() ;
            $table->foreign('numéro garage')->references('num-reg-commerce')->on('Garage') ;
        });

        Schema::create('Première_vente  ', function (Blueprint $table) {
            $table->integer('Numéro_cons')->unsigned()->nullable() ;
            $table->foreign('Numéro_cons')->references('numéro')->on('Constructeur') ;
            $table->integer('numéro_véhicule')->unsigned()->nullable() ;
            $table->foreign('numéro_véhicule')->references('numéro')->on('Véhicule') ;
            $table->integer('numéro_garage')->unsigned()->nullable() ;
            $table->foreign('numéro_garage')->references('num-reg-commerce')->on('Garage') ;
        });

        Schema::create('achat', function (Blueprint $table) {
            $table->integer('numéro_garage')->unsigned()->nullable() ;
            $table->foreign('numéro_garage')->references('num-reg-commerce')->on('Garage') ;

            $table->integer('numéro_véhicule')->unsigned()->nullable() ;
            $table->foreign('numéro_véhicule')->references('numéro')->on('Véhicule') ;

            $table->integer('num_enregistrement')->unsigned()->nullable() ;
            $table->foreign('num_enregistrement')->references('num_enregistrement')->on('vehicules') ;
            $table->date('date');
            $table->integer('prix');
        });
        */
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
