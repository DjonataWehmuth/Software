<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(TabelaSeeder::class);
         $this->call(CampoSeeder::class);    
         $this->call(BotaoSeeder::class);

         $this->call(StatusSeeder::class);
         $this->call(UserSeed::class);
         $this->call(PessoaSeeder::class);
         $this->call(SexoSeeder::class);
         $this->call(AbrangenciaSeeder::class);         
         $this->call(PrioridadeSeeder::class);
         $this->call(TipoSeeder::class);
         $this->call(ObraSeeder::class);
         $this->call(PainelSeeder::class);
         $this->call(FuncaoSeeder::class);

         $this->call(CampoObraSeeder::class);
         $this->call(BotaoObraSeeder::class);

         $this->call(CampoPessoaSeeder::class);
         $this->call(BotaoPessoaSeeder::class);

         $this->call(CampoTipoSeeder::class);
         $this->call(BotaoTipoSeeder::class);

         $this->call(CampoObraFuncionarioSeeder::class);
         $this->call(BotaoObraFuncionarioSeeder::class);
    }
}
