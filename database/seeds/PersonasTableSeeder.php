<?php

use Illuminate\Database\Seeder;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            'nombres' => 'Juan José',
            'apellidos' => 'Pérez Rojas',
            'nacionalidad' => 'V',
            'cedula' => '12345678'
        ]);

        DB::table('personas')->insert([
            'nombres' => 'María Victoria',
            'apellidos' => 'Hernández Flores',
            'nacionalidad' => 'V',
            'cedula' => '87654321'
        ]);
    }
}
