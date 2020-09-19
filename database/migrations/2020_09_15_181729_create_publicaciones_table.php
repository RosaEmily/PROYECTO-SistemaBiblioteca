<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicaciones', function (Blueprint $table) {
            $table->id('idpublicacion');
            $table->string('publicacion');
            $table->integer('edicion');
            $table->string('ISBNISSN')->unique();
            $table->year('aniodepublicacion');
            $table->string('tipo');
            
            $table->foreignId('idautor')->references('idautor')->on('autores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('ideditorial')->references('ideditorial')->on('editoriales')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('idtema')->references('idtema')->on('temas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('ididioma')->references('ididioma')->on('idiomas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicaciones');
    }
}
