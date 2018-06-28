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

      DB::table('tec_tabelas')->insert([
        'id'                  => 2,
        'nome'                => 'Obras',
        'descricao'           => 'Cadastro de obras',
        'observacao'          => 'Informações da tabela de obras',

        'formularioconsulta'  => 'consultar_obra',
        'formularioindex'     => 'obras',
        'formularionovo'      => 'nova_obra',

        'inserirregistro'     => 'inserir_obra',
        'alterarregistro'     => 'update_obra',
        'excluirregistro'     => 'excluir_obra',

        'atualizarregistro'   => 'situacao_obra',
      ]);

      DB::table('tec_tabelas')->insert([
        'id'                  => 3,
        'nome'                => 'Tipos',
        'descricao'           => 'Tipos',
        'observacao'          => 'Tipos de registros',

        'formularioconsulta'  => 'consultar_tipo',
        'formularioindex'     => 'tipos',
        'formularionovo'      => 'novo_tipo',

        'inserirregistro'     => 'inserir_tipo',
        'alterarregistro'     => 'update_tipo',
        'excluirregistro'     => 'excluir_tipo',

        'atualizarregistro'   => 'situacao_tipo',
      ]);

      DB::table('tec_tabelas')->insert([
        'id'                  => 4,
        'nome'                => 'Funcionário da obra',
        'descricao'           => 'Funcionários da obra',
        'observacao'          => '',

        'formularioconsulta'  => 'consultar_funcionario',
        'formularioindex'     => 'funcionarios',
        'formularionovo'      => 'novo_funcionario',

        'inserirregistro'     => 'inserir_funcionario',
        'alterarregistro'     => 'update_funcionario',
        'excluirregistro'     => 'exclui_funcionario',

        'atualizarregistro'   => 'situacao_funcionario',
      ]);
    }
}
