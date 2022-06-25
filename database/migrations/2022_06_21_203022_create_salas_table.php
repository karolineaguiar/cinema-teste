<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salas', function (Blueprint $table) {
            $table->id();
            $table->string('filme',55);
            $table->unsignedBigInteger('genero_id');
            $table->timestamps();
        });
    
        Schema::table('salas', function (Blueprint $table) {
             $table->foreign('genero_id')->references('id')->on('generos')->onDelete('cascade');
        
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salas');
    }
}
