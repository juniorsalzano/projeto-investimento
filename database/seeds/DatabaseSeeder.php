<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'cpf'           => '01546585441',        
          'name'          => 'Primeiro Usuario',
          'phone'         => '43991568874',
          'birth'         => '1988-10-01',
          'gender'        => 'M',
          'email'         => 'usuario@investimento.com.br',
          'password'      => bcrypt('123456'),
        ]);
      
        
      
        // $this->call(UserSeeder::class);
    }
}
