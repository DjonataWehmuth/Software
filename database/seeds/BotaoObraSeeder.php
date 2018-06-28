<?php

use Illuminate\Database\Seeder;

class BotaoObraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tec_botoes')->insert([
            'nome'       => 'Gravar',
            'tipo'       => 'submit',
            'situacao'   => '1,3',
            'acao'       => '',
            'icone'      => 'save',
            'cor'        => 'primary',
            'descricao'  => '',
            'observacao' => '',
            'tabela_id'  => 2,
        ]);

        DB::table('tec_botoes')->insert([
            'nome'       => 'Financeiro',
            'tipo'       => 'link',
            'situacao'   => '6,7',
            'acao'       => '',
            'icone'      => 'dollar-sign',
            'cor'        => 'primary',
            'descricao'  => '',
            'url'        => '',            
            'observacao' => '',
            'tabela_id'  => 2,
        ]);

        DB::table('tec_botoes')->insert([
            'nome'       => 'Funcionários',
            'tipo'       => 'link',
            'situacao'   => '1,3,6,7',
            'acao'       => '',
            'icone'      => 'users',
            'cor'        => 'primary',
            'descricao'  => '',
            'url'        => '',            
            'observacao' => '',
            'tabela_id'  => 2,
        ]);

        DB::table('tec_botoes')->insert([
            'nome'       => 'Ativar',
            'tipo'       => 'acao',
            'situacao'   => '1,3',
            'acao'       => 'Ativar',
            'icone'      => 'paper-plane',
            'cor'        => 'primary',
            'descricao'  => '',
            'url'        => 'situacao_obra',            
            'observacao' => '',
            'tabela_id'  => 2,
        ]);

        DB::table('tec_botoes')->insert([
            'nome'       => 'Executar',
            'tipo'       => 'acao',
            'situacao'   => '6',
            'acao'       => 'Executar',
            'icone'      => 'step-forward',
            'cor'        => 'primary',
            'descricao'  => '',
            'url'        => 'situacao_obra',            
            'observacao' => '',
            'tabela_id'  => 2,
        ]);

        DB::table('tec_botoes')->insert([
            'nome'       => 'Cancelar',
            'tipo'       => 'acao',
            'situacao'   => '3',
            'acao'       => 'Cancelar',
            'icone'      => 'ban',
            'cor'        => 'primary',
            'descricao'  => '',
            'url'        => 'situacao_obra',            
            'observacao' => '',
            'tabela_id'  => 2,
        ]);

        DB::table('tec_botoes')->insert([
            'nome'       => 'Finalizar',
            'tipo'       => 'acao',
            'situacao'   => '7',
            'acao'       => 'Finalizar',
            'icone'      => 'step-forward',
            'cor'        => 'primary',
            'descricao'  => '',
            'url'        => 'situacao_obra',            
            'observacao' => '',
            'tabela_id'  => 2,
        ]);

        DB::table('tec_botoes')->insert([
            'nome'       => 'Editar',
            'tipo'       => 'acao',
            'situacao'   => '1,6,7,8',
            'acao'       => 'Editar',
            'icone'      => 'pencil-alt',
            'cor'        => 'primary',
            'descricao'  => '',
            'url'        => 'situacao_obra',            
            'observacao' => '',
            'tabela_id'  => 2,
        ]);
    }
}
