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
        Schema::create('jaimes', function (Blueprint $table) {
            $table->id();
            $table->mediumText('dsc_ja')->nullable();
            $table->foreignId('commentaires_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('users_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('jaimes');
    }
};
