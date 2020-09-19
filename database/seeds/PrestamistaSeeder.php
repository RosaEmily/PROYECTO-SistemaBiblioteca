<?php

use Illuminate\Database\Seeder;
use App\Prestamista;

class PrestamistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prestamista::create([
            'DNI'=>'72733330',
            'nombres'=>'Rosa Emily',
            'apellidos'=>'Rodríguez Huamán',
            'telefono'=>'402228',
            'direccion'=>'Av. Pumacahua 1274'
        ]);
        Prestamista::create([
            'DNI'=>'72733335',
            'nombres'=>'Carol Lizeth',
            'apellidos'=>'Rodríguez Huamán',
            'telefono'=>'402228',
            'direccion'=>'Av. Pumacahua 1274'
        ]);
    }
}
