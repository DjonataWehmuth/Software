<?php

use Illuminate\Database\Seeder;

class CampoPessoaSeeder extends Seeder
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
            'descricao'           => 'Nome da pessoa',
            'ehformulario'        => 'S',
            'ehgrid'              => 'S',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-6',
            'tamanhoi'            => 'col-md-3',
            'icone'               => 'id-card',
            'tipo'                => 'text',
            'componente'          => 'input',
            'tabelareferencia'     => '',
            'observacao'          => '',
            'obrigatorio'         => 'required',
            'tabela_id'           => 1,
            'mascara'             => '',
            'ordem'               => 10,
          ]);
    
          DB::table('tec_campos')->insert([
            'nome'                => 'documento',
            'titulo'              => 'Documento',
            'descricao'           => 'Documento da pessoa',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-3',
            'tamanhoi'            => '',
            'ehformulario'        => 'N',
            'ehgrid'              => 'N',
            'icone'               => 'id-card',
            'tipo'                => 'text',
            'componente'          => 'input',
            'tabelareferencia'     => '',
            'observacao'          => '',
            'obrigatorio'         => '',        
            'tabela_id'           => 1,
            'mascara'             => '',
            'ordem'               => 20,
          ]);
    
          DB::table('tec_campos')->insert([
            'nome'                => 'inscricao',
            'titulo'              => 'Inscrição',
            'descricao'           => 'Inscrição da pessoa',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-3',
            'tamanhoi'            => '',
            'ehformulario'        => 'N',
            'ehgrid'              => 'N',
            'icone'               => 'id-card',
            'tipo'                => 'text',
            'componente'          => 'input',
            'tabelareferencia'     => '',
            'observacao'          => '',
            'obrigatorio'         => '',
            'tabela_id'           => 1,
            'mascara'             => '',
            'ordem'               => 30,
          ]);
    
          DB::table('tec_campos')->insert([
            'nome'                => 'telefone',
            'titulo'              => 'Telefone',
            'descricao'           => 'Telefone da pessoa',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-3',
            'tamanhoi'            => 'col-md-3',
            'ehformulario'        => 'S',
            'ehgrid'              => 'S',
            'icone'               => 'phone',
            'tipo'                => 'tel',
            'componente'          => 'input',
            'tabelareferencia'     => '',
            'observacao'          => '',
            'obrigatorio'         => '',
            'tabela_id'           => 1,
            'mascara'             => '(00) 0000-0000',
            'ordem'               => 40,
          ]);
    
          DB::table('tec_campos')->insert([
            'nome'                => 'celular',
            'titulo'              => 'Celular',
            'descricao'           => 'Celular da pessoa',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-3',
            'tamanhoi'            => 'col-md-2',
            'ehformulario'        => 'S',
            'ehgrid'              => 'S',
            'icone'               => 'mobile',
            'tipo'                => 'tel',
            'componente'          => 'input',
            'tabelareferencia'     => '',
            'observacao'          => '',
            'obrigatorio'         => 'required',
            'tabela_id'           => 1,
            'mascara'             => '(00) 00000-0000',
            'ordem'               => 50,
          ]);
    
          DB::table('tec_campos')->insert([
            'nome'                => 'sexo_id',
            'titulo'              => 'Sexo',
            'descricao'           => 'Sexo da pessoa',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-3',
            'tamanhoi'            => '',
            'ehformulario'        => 'S',
            'ehgrid'              => 'N',
            'icone'               => 'transgender-alt',
            'tipo'                => '',
            'componente'          => 'select',
            'tabelareferencia'     => 'cad_sexo',
            'observacao'          => '',
            'obrigatorio'         => '',
            'tabela_id'           => 1,
            'mascara'             => '',
            'ordem'               => 60,
          ]);
    
          DB::table('tec_campos')->insert([
            'nome'                => 'abrangencia_id',
            'titulo'              => 'Abrangencia',
            'descricao'           => 'Abrangencia da pessoa',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-3',
            'tamanhoi'            => '',
            'ehformulario'        => 'S',
            'ehgrid'              => 'N',
            'icone'               => 'tag',
            'tipo'                => 'text',
            'componente'          => 'select',
            'tabelareferencia'     => 'cad_abrangencia',
            'observacao'          => '',
            'obrigatorio'         => 'required',
            'tabela_id'           => 1,
            'mascara'             => '',
            'ordem'               => 70,
          ]);
    
          DB::table('tec_campos')->insert([
            'nome'                => 'nascimento',
            'titulo'              => 'Nascimento',
            'descricao'           => 'Nascimento da pessoa',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-3',
            'tamanhoi'            => '',
            'ehformulario'        => 'S',
            'ehgrid'              => 'N',
            'icone'               => 'table',
            'tipo'                => 'text',
            'componente'          => 'input',
            'tabelareferencia'     => '',
            'observacao'          => '',
            'obrigatorio'         => '',
            'tabela_id'           => 1,
            'mascara'             => '00/00/0000',
            'ordem'               => 80,
          ]);
    
          DB::table('tec_campos')->insert([
            'nome'                => 'email',
            'titulo'              => 'E-mail',
            'descricao'           => 'E-mail da pessoa',
            'tamanho'             => '',
            'tamanhof'            => 'col-md-9',
            'tamanhoi'            => 'col-md-2',
            'ehformulario'        => 'S',
            'ehgrid'              => 'S',
            'icone'               => 'at',
            'tipo'                => 'email',
            'componente'          => 'input',
            'tabelareferencia'     => '',
            'observacao'          => '',
            'obrigatorio'         => 'required',
            'tabela_id'           => 1,
            'mascara'             => '',
            'ordem'               => 90,
          ]);
    
          DB::table('tec_campos')->insert([
            'nome'                => 'observacao',
            'titulo'              => 'Observação',
            'descricao'           => 'Observação da pessoa',
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
            'tabela_id'           => 1,
            'mascara'             => '',
            'ordem'               => 100,
          ]);
    }
}
