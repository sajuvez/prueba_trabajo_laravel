<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(User::class)->create([
        'name'=>'Usuario n°1',
        'email'=>'correo_usuario1@ensayo.com']);
      factory(User::class)->create([
        'name'=>'Usuario N°2',
        'email'=>'correo_usuario2@ensayo.com']);
      factory(User::class)->create([
        'name'=>'Usuario N°3',
        'email'=>'correo_usuario3@ensayo.com']);
      Factory(User::class)->times(5)->create();
    }
}
