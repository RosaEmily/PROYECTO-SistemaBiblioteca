<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id('idprestamo');
            $table->date('fechadeprestamo');
            $table->date('fechadedevolucion');
            
            $table->foreignId('idprestamista')->references('idprestamista')->on('prestamistas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('idpublicacion')->references('idpublicacion')->on('publicaciones')->onDelete('cascade')->onUpdate('cascade');
        });
        
        $prestamosxpublicacion = "
            CREATE PROCEDURE `prestamosxpublicacion`()
            BEGIN
                SELECT
                    `publicaciones`.`publicacion`,COUNT(`prestamos`.`idpublicacion`) `cantidad`
                FROM 
                    `publicaciones`
                INNER JOIN 
                    `prestamos`
                ON
                    `publicaciones`.`idpublicacion`=`prestamos`.`idpublicacion`
                GROUP BY
                    `publicaciones`.`publicacion`;
            END
        ";

        $prestamosxprestamista = "
            CREATE PROCEDURE `prestamosxprestamista`()
            BEGIN
                SELECT
                    CONCAT(`prestamistas`.`apellidos`,' ',`prestamistas`.`nombres`) AS `prestamista` ,COUNT(`prestamos`.`idprestamista`) `cantidad`
                FROM 
                    `prestamistas`
                INNER JOIN 
                    `prestamos`
                ON
                    `prestamistas`.`idprestamista`=`prestamos`.`idprestamista`
                GROUP BY
                    `prestamista`;
            END
        ";

        DB::unprepared("DROP procedure IF EXISTS prestamosxpublicacion");
        DB::unprepared($prestamosxpublicacion);
        DB::unprepared("DROP procedure IF EXISTS prestamosxprestamista");
        DB::unprepared($prestamosxprestamista);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
