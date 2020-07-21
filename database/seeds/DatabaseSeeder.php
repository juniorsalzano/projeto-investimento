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
          'notes'         => '',
          'email'         => 'adm@investimento.com.br',
          'password'      => env('PASSWORD_HASH') ? bcrypt('123456') : '123456',
          'status'        => 'active',
          'permission'    => 'app.user',
        ]);
      
        // $this->call(UserSeeder::class);
    }
}
