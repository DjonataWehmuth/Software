<?php

use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cad_tipos')->insert([
            'id'   => 1,
            'nome' => 'Reforma',
            'tabela_id' => 2,
          ]);
    }
}
