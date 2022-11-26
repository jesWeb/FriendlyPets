//<?php

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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('costo');
            $table->string('descripcion');
           
            //llave foranea
           // $table->unsignedBigInteger('pet_id');
           // $table->foreign('pet_id')->references('id')->on('pets');
            // $table->unsignedBigInteger('people_id');
            // $table->foreign('people_id')->references('id')->on('people');
            
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
        Schema::dropIfExists('services');
    }
};
