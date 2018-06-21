<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Djonata Wehmuth',
        'email'  => 'djonata1098@gmail.com',
        'password'  => bcrypt('123456'),
      ]);
    }
}