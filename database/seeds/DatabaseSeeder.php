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
         $this->call(UserSeed::class);
         $this->call(TabelaSeeder::class);
         $this->call(CampoSeeder::class);
         $this->call(StatusSeeder::class);
         $this->call(AbrangenciaSeeder::class);
         $this->call(SexoSeeder::class);
         $this->call(BotaoSeeder::class);
         $this->call(PessoaSeeder::class);
    }
}
