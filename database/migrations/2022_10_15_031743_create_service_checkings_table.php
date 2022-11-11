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
        Schema::create('service_checkings', function (Blueprint $table) {
            $table->id();
            $table->integer('total');
            //llave foranea
            $table->unsignedBigInteger('serv_id');
            $table->foreign('serv_id')->references('id')->on('services');

            $table->unsignedBigInteger('check_id');
            $table->foreign('check_id')->references('id')->on('checkings');
            
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
        Schema::dropIfExists('service_checkings');
    }
};
