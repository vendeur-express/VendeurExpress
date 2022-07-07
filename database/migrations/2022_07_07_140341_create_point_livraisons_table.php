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
        Schema::create('point_livraisons', function (Blueprint $table) {
            $table->id();
            $table->string('code_bout');
            $table->foreignId('pay_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('ville_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('longitude');
            $table->string('latitude');
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
        Schema::dropIfExists('point_livraisons');
    }
};