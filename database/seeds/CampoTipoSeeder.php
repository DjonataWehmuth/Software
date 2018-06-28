<?php

use Illuminate\Database\Seeder;

class CampoTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tec_campos')->insert([
            'nome'                => 'nome',
            'titulo'              => 'Nome',
            'descricao'           => 'Nome',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-8',
            'tamanhoi'            => 'col-md-10',
            'ehformulario'        => 'S',
            'ehgrid'              => 'S',
            'icone'               => 'align-justify',
            'tipo'                => 'text',
            'componente'          => 'input',
            'tabelareferencia'     => '',
            'observacao'          => '',
            'obrigatorio'         => '',
            'tabela_id'           => 3,
            'mascara'             => '',
            'ordem'               => 10,
          ]);
    
          DB::table('tec_campos')->insert([
            'nome'                => 'tabela_id',
            'titulo'              => 'Tabela',
            'descricao'           => 'Tabela',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-4',
            'tamanhoi'            => '',
            'ehformulario'        => 'S',
            'ehgrid'              => 'N',
            'icone'               => 'tag',
            'tipo'                => '',
            'componente'          => 'select',
            'tabelareferencia'    => 'tec_tabelas',
            'observacao'          => '',
            'obrigatorio'         => 'required',
            'tabela_id'           => 3,
            'mascara'             => '',
            'ordem'               => 20,
          ]);
    
          
          DB::table('tec_campos')->insert([
            'nome'                => 'observacao',
            'titulo'              => 'Observação',
            'descricao'           => 'Observação do tipo',
            'tamanho'             => '5',
            'tamanhof'            => 'col-md-12',
            'tamanhoi'            => '',
            'ehformulario'        => 'S',
            'ehgrid'              => 'N',
            'icone'               => 'align-justify',
            'tipo'                => '',
            'componente'          => 'textarea',
            'tabelareferencia'     => '',
            'observacao'          => '',
            'obrigatorio'         => '',
            'tabela_id'           => 3,
            'mascara'             => '',
            'ordem'               => 30,
          ]);
    }
}
