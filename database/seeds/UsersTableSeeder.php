<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nome' => 'Administrador',
            'apelido' => 'Admin',
            'email' => 'admin@mail.com',
            'estado' => '1',
            'password' => bcrypt('admin123456'),
            'tipoUsuario' => '1',            
        ]);
 
          DB::table('users')->insert([
            'nome' => 'Operador',
            'apelido' => 'Opera',
            'email' => 'operador@mail.com',
            'estado' => '1',
            'password' => bcrypt('operador123456'),
            'tipoUsuario' => '2',            
        ]);
    }
}
