<?php

use Illuminate\Database\Seeder;

class PessoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cad_pessoas')->insert([
            'nome'    => 'Djonata Wehmuth',
            'email'   => 'djonata1098@gmai.com',
            'celular' => '47 992132212',
          ]);
    }
}
