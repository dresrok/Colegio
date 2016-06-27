<?php

use Illuminate\Database\Seeder;

class SalonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salones')->insert([
	      'nombre' => 'Salón Prueba',
	      'numero' => 1,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);

	    DB::table('salones')->insert([
	      'nombre' => 'Salón Prueba',
	      'numero' => 2,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);

	    DB::table('salones')->insert([
	      'nombre' => 'Salón Prueba',
	      'numero' => 3,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);

	    DB::table('salones')->insert([
	      'nombre' => 'Salón Prueba',
	      'numero' => 4,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);

	    DB::table('salones')->insert([
	      'nombre' => 'Salón Prueba',
	      'numero' => 5,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);
    }
}
