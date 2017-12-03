<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'César Characo',
            'email' => 'cesarcharaco@gmail.com',
            'password' => bcrypt('1234'),
            'tipo_user' => 'Administrador(a)'
        ]);

    }
}
