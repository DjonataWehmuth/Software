<?php

use Illuminate\Database\Seeder;

class TabelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tec_tabelas')->insert([
        'id'                  => 1,
        'nome'                => 'Pessoas',
        'descricao'           => 'Cadastro de pessoas',
        'observacao'          => 'Informações da tabela de pessoas',

        'formularioconsulta'  => 'consultar_pessoa',
        'formularioindex'     => 'pessoas',
        'formularionovo'      => 'nova_pessoa',

        'inserirregistro'     => 'inserir_pessoa',
        'alterarregistro'     => 'update_pessoa',
        'excluirregistro'     => 'excluir_pessoa',

        'atualizarregistro'   => 'situacao_pessoa',
      ]);
    }
}
