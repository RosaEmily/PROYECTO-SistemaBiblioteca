<?php

use App\Publicacion;
use Illuminate\Database\Seeder;

class PublicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publicacion::create([
            'publicacion'=>'Introducción al Análisis Matemático',
            'edicion'=>'3',
            'ISBNISSN'=>'978-612-45216-4-5',
            'aniodepublicacion'=>'2015',
            'tipo'=>'LIBRO',
            'idautor'=>2,
            'ideditorial'=>1,
            'idtema'=>9,
            'ididioma'=>2
        ]);
        Publicacion::create([
            'publicacion'=>'Proceso de Datos',
            'edicion'=>'3',
            'ISBNISSN'=>'0210-1220',
            'aniodepublicacion'=>'1967',
            'tipo'=>'REVISTA',
            'idautor'=>10,
            'ideditorial'=>4,
            'idtema'=>2,
            'ididioma'=>2
        ]);
    }
}
