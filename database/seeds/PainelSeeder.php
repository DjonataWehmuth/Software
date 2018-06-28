<?php

use Illuminate\Database\Seeder;

class PainelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bi_painel')->insert([
            'nome'   => 'Novas pessoas',
            'icone'  => 'user-plus',
            'cor'    => 'aqua',
            'url'    => 'pessoas',
            'tabela' => 'cad_pessoas',
        ]);

        DB::table('bi_painel')->insert([
            'nome'   => 'Novos usuários',
            'icone'  => 'user-plus',
            'cor'    => 'aqua',
            'url'    => 'pessoas',
            'tabela' => 'users',
        ]);

        DB::table('bi_painel')->insert([
            'nome'   => 'Novas obras',
            'icone'  => 'building',
            'cor'    => 'aqua',
            'url'    => 'obras',
            'tabela' => 'obr_cadastros',
        ]);

        DB::table('bi_painel')->insert([
            'nome'   => 'Obras em andamento',
            'icone'  => 'building',
            'cor'    => 'aqua',
            'url'    => 'obras',
            'tabela' => 'obr_cadastros',
        ]);

        DB::table('bi_painel')->insert([
            'nome'   => 'Contas a pagar',
            'icone'  => 'dollar-sign',
            'cor'    => 'green',
            'url'    => 'obras',
            'tabela' => 'obr_cadastros',
        ]);

        DB::table('bi_painel')->insert([
            'nome'   => 'Contas a receber',
            'icone'  => 'dollar-sign',
            'cor'    => 'green',
            'url'    => 'obras',
            'tabela' => 'obr_cadastros',
        ]);

        DB::table('bi_painel')->insert([
            'nome'   => 'Recebimentos atrasados',
            'icone'  => 'dollar-sign',
            'cor'    => 'green',
            'url'    => 'obras',
            'tabela' => 'obr_cadastros',
        ]);

        DB::table('bi_painel')->insert([
            'nome'   => 'Pagamentos atrasados',
            'icone'  => 'dollar-sign',
            'cor'    => 'green',
            'url'    => 'obras',
            'tabela' => 'obr_cadastros',
        ]);

        DB::table('bi_painel')->insert([
            'nome'   => 'Solicitação de contato',
            'icone'  => 'phone',
            'cor'    => 'yellow',
            'url'    => 'obras',
            'tabela' => 'obr_cadastros',
        ]);
    }
}
