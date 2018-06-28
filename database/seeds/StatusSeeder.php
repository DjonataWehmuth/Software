<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cad_status')->insert([
        'id'   => 1,
        'nome' => 'Cadastrado',
        'cor' => 'gray',
      ]);

      DB::table('cad_status')->insert([
        'id'   => 2,
        'nome' => 'Ativo',
        'cor' => 'primary',
      ]);

      DB::table('cad_status')->insert([
        'id'   => 3,
        'nome' => 'Editando',
        'cor' => 'warning',
      ]);

      DB::table('cad_status')->insert([
        'id'   => 4,
        'nome' => 'Emitido',
        'cor' => 'navy',
      ]);

      DB::table('cad_status')->insert([
        'id'   => 5,
        'nome' => 'Cancelado',
        'cor' => 'danger',
      ]);

      DB::table('cad_status')->insert([
        'id'   => 6,
        'nome' => 'Ag. execução',
        'cor' => 'primary',
      ]);

      DB::table('cad_status')->insert([
        'id'   => 7,
        'nome' => 'Executando',
        'cor' => 'success',
      ]);

      DB::table('cad_status')->insert([
        'id'   => 8,
        'nome' => 'Encerrada',
        'cor' => 'info',
      ]);
    }
}
