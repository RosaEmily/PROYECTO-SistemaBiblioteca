<?php

use Illuminate\Database\Seeder;
use App\Editorial;

class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Editorial::create([
            'editorial'=>'Representaciones GEMAR E.I.R.L',
            'telefono'=>'4466176',
            'email'=>'rep_gemar09@hotmail.com',
            'direccion'=>'Río Vilcanota 168. Lima 03.'
        ]);
        Editorial::create([
            'editorial'=>'Pearson Educación México',
            'telefono'=>'53870700',
            'email'=>'pearson.educacion@pearson.com',
            'direccion'=>'Calle Antonio Dovalí Jaime No.70. Ciudad de México.'
        ]);
        Editorial::create([
            'editorial'=>'McGraw-Hill',
            'telefono'=>'7662000',
            'email'=>'cservice@mheducation.com',
            'direccion'=>'1325 Avenue of the Americas. New York.'
        ]);
        Editorial::create([
            'editorial'=>'Prodace',
            'telefono'=>'8367000',
            'email'=>'prodaceditores@prodace.com',
            'direccion'=>'Avenida Siempreviva. Springfield.'
        ]);        
    }
}
