<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(TemaSeeder::class);
        $this->call(IdiomaSeeder::class);
        $this->call(EditorialSeeder::class);
        $this->call(AutorSeeder::class);
        $this->call(PublicacionSeeder::class);
        $this->call(PrestamistaSeeder::class);
        $this->call(PrestamoSeeder::class);
    }
}
