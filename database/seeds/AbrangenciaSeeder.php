<?php

use Illuminate\Database\Seeder;

class AbrangenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cad_abrangencia')->insert([
            'id'                  => 1,
            'nome'                => 'Cliente',
        ]);
        
        DB::table('cad_abrangencia')->insert([
            'id'                  => 2,
            'nome'                => 'Fornecedor',
        ]);

        DB::table('cad_abrangencia')->insert([
            'id'                  => 3,
            'nome'                => 'Funcionario',
        ]);
    }
}
