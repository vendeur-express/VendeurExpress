<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demarcheurs', function (Blueprint $table) {
            $table->id();
            $table->string('cnib_dem');
            $table->string('code_dem');
            $table->string('pays_dem');
            $table->string('ville_dem');
            $table->string('annee_naisse_dem');
            $table->string('type_paiement');
            $table->string('numero_compte_dem');
            $table->string('sexe_dem');
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
        Schema::dropIfExists('demarcheurs');
    }
};