<?php

use Illuminate\Database\Seeder;
use App\Idioma;

class IdiomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Idioma::create([
            'idioma'=>'Inglés'
        ]);
        Idioma::create([
            'idioma'=>'Español'
        ]);
        Idioma::create([
            'idioma'=>'Francés'
        ]);
        Idioma::create([
            'idioma'=>'Portugués'
        ]);
        Idioma::create([
            'idioma'=>'Italiano'
        ]);
        Idioma::create([
            'idioma'=>'Quechua'
        ]);
        Idioma::create([
            'idioma'=>'Árabe'
        ]);
        Idioma::create([
            'idioma'=>'Ruso'
        ]);
    }
}
