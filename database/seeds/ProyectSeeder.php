<?php

use Illuminate\Database\Seeder;
use App\Proyecto;

class ProyectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proyecto::create([
          'Nombre'=>'Proyecto_1',
          'Descripción'=>'desarrolo de test 1',
        ]);
        Proyecto::create([
          'Nombre'=>'Proyecto 2',
          'Descripción'=>'desarrollo de test 2',
        ]);
        Proyecto::create([
          'Nombre'=>'Proyecto 3',
          'Descripción'=>'Desarrolo test 3'
        ]);
        Factory(Proyecto::class)->times(5)->create();
    }
}
