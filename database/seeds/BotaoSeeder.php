<?php

use Illuminate\Database\Seeder;

class BotaoSeeder extends Seeder
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
            'tabela_id'  => 1,
          ]);

          DB::table('tec_botoes')->insert([
            'nome'       => 'Limpar',
            'tipo'       => 'Reset',
            'situacao'   => '1,3',
            'acao'       => '',
            'icone'      => 'eraser',
            'cor'        => 'primary',
            'descricao'  => '',
            'observacao' => '',
            'tabela_id'  => 1,
          ]);

          DB::table('tec_botoes')->insert([
            'nome'       => 'Editar',
            'tipo'       => 'submit',
            'situacao'   => '2,5',
            'acao'       => 'Editar',
            'icone'      => 'asterisk',
            'cor'        => 'primary',
            'descricao'  => '',
            'url'        => 'situacao_pessoa',            
            'observacao' => '',
            'tabela_id'  => 1,
          ]);

          DB::table('tec_botoes')->insert([
            'nome'       => 'Ativar',
            'tipo'       => 'submit',
            'situacao'   => '1,3',
            'acao'       => 'Ativar',
            'icone'      => 'asterisk',
            'cor'        => 'primary',
            'descricao'  => '',
            'url'        => 'situacao_pessoa',                        
            'observacao' => '',
            'tabela_id'  => 1,
          ]);

          DB::table('tec_botoes')->insert([
            'nome'       => 'Cancelar',
            'tipo'       => 'submit',
            'situacao'   => '3',
            'acao'       => 'Cancelar',
            'icone'      => 'ban',
            'cor'        => 'primary',
            'descricao'  => '',
            'url'        => 'situacao_pessoa',            
            'observacao' => '',
            'tabela_id'  => 1,
          ]);
    }
}
