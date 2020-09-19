<?php

use App\Prestamo;
use Illuminate\Database\Seeder;

class PrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prestamo::create([
            'fechadeprestamo'=>now(),
            'fechadedevolucion'=>now(),
            'idprestamista'=>1,
            'idpublicacion'=>1
        ]);
    }
}
