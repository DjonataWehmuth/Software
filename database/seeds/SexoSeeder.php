<?php

use Illuminate\Database\Seeder;

class SexoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cad_sexo')->insert([
            'id'   => 1,
            'nome' => 'Masculino',
        ]);

        DB::table('cad_sexo')->insert([
            'id'   => 2,
            'nome' => 'Feminino',
        ]);

        DB::table('cad_sexo')->insert([
            'id'   => 3,
            'nome' => 'Outros',
        ]);
    }
}
