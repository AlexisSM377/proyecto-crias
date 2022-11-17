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
        Schema::create('dietas', function (Blueprint $table) {
            $table->id();
            $table->longText('dieta')->comment('Descripción de dieta de la cría enferma');
            $table->longText('tretamiento')->comment('Descripción de tratamiento de la cría enferma');
            $table->foreignId('crias_id')->comment('Relacion de la dieta de la cría')->constrained();
            $table->foreignId('corrales_id')->comment('Relacion de la dieta con el corral')->constrained();
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
        Schema::dropIfExists('dietas');
    }
};
