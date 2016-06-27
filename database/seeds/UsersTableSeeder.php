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
	      'name' => 'Usuario Prueba',
	      'email' => 'usuario@prueba.com',
	      'password' => bcrypt('qwerty'),
	      'created_at' => date("Y-m-d H:i:s")
	    ]);
    }
}
