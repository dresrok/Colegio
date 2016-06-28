<?php

use Illuminate\Database\Seeder;

class ProfesoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesores')->insert([
	      'nombre' => 'Luis Perez',
	      'email' => 'lperez@prueba.com',
	      'telefono' => NULL,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);

	    DB::table('profesores')->insert([
	      'nombre' => 'Luisa Romero',
	      'email' => 'lromero@prueba.com',
	      'telefono' => '2639874',
	      'created_at' => date("Y-m-d H:i:s")
	    ]);
    }
}
