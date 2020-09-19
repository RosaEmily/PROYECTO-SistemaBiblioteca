<?php

use Illuminate\Database\Seeder;
use App\Autor;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autor::create([
            'autor'=>'Ron Larson',
            'email'=>'odx@psu.edu',
            'nacionalidad'=>'Estadounidense'
        ]);
        Autor::create([
            'autor'=>'Armando Venero',
            'email'=>'avenero@venero.edu',
            'nacionalidad'=>'Peruana'
        ]);
        Autor::create([
            'autor'=>'Mario Vargas Llosa',
            'email'=>'mvllosa@llosa.edu',
            'nacionalidad'=>'Peruana'
        ]);
        Autor::create([
            'autor'=>'Gabriel García Márquez',
            'email'=>'no disponible',
            'nacionalidad'=>'Colombiana'
        ]);
        Autor::create([
            'autor'=>'Charles Dickens',
            'email'=>'no disponible',
            'nacionalidad'=>'Británica'
        ]);
        Autor::create([
            'autor'=>'Jane Austen',
            'email'=>'no disponible',
            'nacionalidad'=>'Británica'
        ]);
        Autor::create([
            'autor'=>'Franz Kafka',
            'email'=>'no disponible',
            'nacionalidad'=>'Checa'
        ]);
        Autor::create([
            'autor'=>'Fiódor Dostoyevski',
            'email'=>'no disponible',
            'nacionalidad'=>'Rusa'
        ]);
        Autor::create([
            'autor'=>'J. K. Rowling',
            'email'=>'no disponible',
            'nacionalidad'=>'Británica'
        ]);
        Autor::create([
            'autor'=>'Valentín Albillo',
            'email'=>'no disponible',
            'nacionalidad'=>'Española'
        ]);
    }
}
