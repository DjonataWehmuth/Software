<?php

use Illuminate\Database\Seeder;

class CampoObraFuncionarioSeeder extends Seeder
{
    const TABELA = 4;
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
            'tamanhof'            => 'col-md-4',
            'tamanhoi'            => 'col-md-5',
            'ehformulario'        => 'S',
            'ehgrid'              => 'S',
            'icone'               => 'align-justify',
            'tipo'                => 'text',
            'componente'          => 'input',
            'tabelareferencia'    => '',
            'observacao'          => '',
            'obrigatorio'         => '',
            'tabela_id'           => SELF::TABELA,
            'mascara'             => '',
            'ordem'               => 10,
          ]);
    
          DB::table('tec_campos')->insert([
            'nome'                => 'pessoa_id',
            'titulo'              => 'Funcionário',
            'descricao'           => 'Funcionário',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-2',
            'tamanhoi'            => '',
            'ehformulario'        => 'S',
            'ehgrid'              => 'N',
            'icone'               => 'user',
            'tipo'                => '',
            'componente'          => 'select',
            'tabelareferencia'    => 'cad_pessoas',
            'observacao'          => '',
            'obrigatorio'         => 'required',
            'tabela_id'           => SELF::TABELA,
            'mascara'             => '',
            'ordem'               => 20,
          ]);

          DB::table('tec_campos')->insert([
            'nome'                => 'funcao_id',
            'titulo'              => 'Função',
            'descricao'           => 'Função',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-2',
            'tamanhoi'            => '',
            'ehformulario'        => 'S',
            'ehgrid'              => 'N',
            'icone'               => 'user',
            'tipo'                => '',
            'componente'          => 'select',
            'tabelareferencia'    => 'cad_funcao',
            'observacao'          => '',
            'obrigatorio'         => 'required',
            'tabela_id'           => SELF::TABELA,
            'mascara'             => '',
            'ordem'               => 30,
          ]);

          DB::table('tec_campos')->insert([
            'nome'                => 'valorhora',
            'titulo'              => 'Valor por hora',
            'descricao'           => 'Valor por hora',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-2',
            'tamanhoi'            => 'col-md-2',
            'ehformulario'        => 'S',
            'ehgrid'              => 'S',
            'icone'               => 'align-justify',
            'tipo'                => 'number',
            'componente'          => 'input',
            'tabelareferencia'     => '',
            'observacao'          => '',
            'obrigatorio'         => '',
            'tabela_id'           => SELF::TABELA,
            'mascara'             => '',
            'ordem'               => 40,
          ]);

          DB::table('tec_campos')->insert([
            'nome'                => 'previsaohoras',
            'titulo'              => 'Previsão horas',
            'descricao'           => 'Previsão horas',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-2',
            'tamanhoi'            => 'col-md-2',
            'ehformulario'        => 'S',
            'ehgrid'              => 'S',
            'icone'               => 'align-justify',
            'tipo'                => 'number',
            'componente'          => 'input',
            'tabelareferencia'     => '',
            'observacao'          => '',
            'obrigatorio'         => '',
            'tabela_id'           => SELF::TABELA,
            'mascara'             => '',
            'ordem'               => 50,
          ]);
    }
}
