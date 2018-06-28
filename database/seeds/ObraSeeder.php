<?php

use Illuminate\Database\Seeder;

class ObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('obr_cadastro')->insert([
            'nome'          => 'REFORMA CASA',
            'tipo_id'       => 1,
            'pessoa_id'     => 1,
            'prioridade_id' => 1,
        ]);
    }
}
