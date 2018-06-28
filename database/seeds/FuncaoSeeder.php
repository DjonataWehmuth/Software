<?php

use Illuminate\Database\Seeder;

class FuncaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cad_funcao')->insert([
            'nome' => 'Eletrecista',
        ]);

        DB::table('cad_funcao')->insert([
            'nome' => 'Pedreiro',
        ]);

        DB::table('cad_funcao')->insert([
            'nome' => 'Encanador',
        ]);
    }
}
