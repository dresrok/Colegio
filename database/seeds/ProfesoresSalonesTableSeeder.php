<?php

use Illuminate\Database\Seeder;

class ProfesoresSalonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesores_salones')->insert([
	      'profesor_id' => 1,
	      'salon_id' => 1,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);

	    DB::table('profesores_salones')->insert([
	      'profesor_id' => 2,
	      'salon_id' => 1,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);
    }
}
