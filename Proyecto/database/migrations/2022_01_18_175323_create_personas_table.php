<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30);
            $table->string('apparterno', 30);
            $table->string('apmaterno', 30);
            $table->string('edad', 10);
            $table->string('nacimiento', 40);
            $table->string('grados', 30);
            $table->string('calle', 50);
            $table->string('colonia', 30);
            $table->string('cp', 5);
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
        Schema::dropIfExists('personas');
    }
}
