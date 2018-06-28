<?php

use Illuminate\Database\Seeder;

class PrioridadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cad_prioridade')->insert([
            'id'    => 1,
            'nome'  => 'Baixa',
            'icone' => '',
        ]);

        DB::table('cad_prioridade')->insert([
            'id'    => 2,
            'nome'  => 'Normal',
            'icone' => '',
        ]);          

        DB::table('cad_prioridade')->insert([
            'id'    => 3,
            'nome'  => 'Urgente',
            'icone' => '',
        ]);          
    }
}
