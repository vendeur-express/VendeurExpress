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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name_us');
            $table->string('email_us')->unique();
            $table->string('tel_us')->unique();
            $table->timestamp('email_verified_at_us')->nullable();
            $table->string('password_us');
            $table->foreignId('images_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('userable_id');
            $table->string('userable_type');
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
