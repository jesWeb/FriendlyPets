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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sexo');
            $table->integer('edad');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email')->unique();
            $table->string('password')->unique();
           
            //llave foranea
            //$table->unsignedBigInteger('type_user_id');
            //$table->foreign('type_user_id')->references('id')->on('type_users');
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
        Schema::dropIfExists('people');
    }
};
