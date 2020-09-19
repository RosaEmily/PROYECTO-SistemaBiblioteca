<?php

use Illuminate\Database\Seeder;
use App\Tema;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tema::create([
            'tema'=>'Arquitectura'
        ]);
        Tema::create([
            'tema'=>'Tecnología'
        ]);
        Tema::create([
            'tema'=>'Psicología'
        ]);
        Tema::create([
            'tema'=>'Filosofía'
        ]);
        Tema::create([
            'tema'=>'Historia y geografía'
        ]);
        Tema::create([
            'tema'=>'Medicina'
        ]);
        Tema::create([
            'tema'=>'Arte'
        ]);
        Tema::create([
            'tema'=>'Literatura'
        ]);
        Tema::create([
            'tema'=>'Matemáticas'
        ]);
    }
}
