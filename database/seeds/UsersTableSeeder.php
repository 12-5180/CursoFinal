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
        //
        DB::table('users')->insert([
            'name' => "María Pacheco",
            'email' => 'admin@es.org',
            'password' => bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => "Juan Pacheco",
            'email' => 'employee@es.org',
            'password' => bcrypt('12345678'),
        ]);
    }
}
