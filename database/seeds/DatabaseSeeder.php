<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function truncateTables(array $tables)
  {
      DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
      foreach ($tables as $table) {
          DB::table($table)->truncate();
      }
      DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
  }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'proyectos',
            'users',
            'productos'
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(ProyectSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(Productos_seeder::class);
    }

}
