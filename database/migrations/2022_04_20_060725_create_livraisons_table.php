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
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id();
            $table->string('nom_li');
            $table->string('code_li')->unique();
            $table->string('altitude');
            $table->string('logitude');
            $table->foreignId('ville_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('livraisons');
    }
};
