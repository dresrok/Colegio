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
	      'nombre' => 'Profesor Prueba 1',
	      'email' => 'profesor1@prueba.com',
	      'telefono' => NULL,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);

	    DB::table('profesores')->insert([
	      'nombre' => 'Profesor Prueba 2',
	      'email' => 'profesor2@prueba.com',
	      'telefono' => '2639874',
	      'created_at' => date("Y-m-d H:i:s")
	    ]);

	    DB::table('profesores')->insert([
	      'nombre' => 'Profesor Prueba 3',
	      'email' => 'profesor3@prueba.com',
	      'telefono' => '3205891476',
	      'created_at' => date("Y-m-d H:i:s")
	    ]);

	    DB::table('profesores')->insert([
	      'nombre' => 'Profesor Prueba 4',
	      'email' => 'profesor4@prueba.com',
	      'telefono' => NULL,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);

	    DB::table('profesores')->insert([
	      'nombre' => 'Profesor Prueba 5',
	      'email' => 'profesor5@prueba.com',
	      'telefono' => '555555',
	      'created_at' => date("Y-m-d H:i:s")
	    ]);
    }
}
