<?php

use App\Producto;
use Illuminate\Database\Seeder;


class Productos_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          Producto::create([
            'Producto'=>'Producto_1',
            'Cantidad'=>'10',
            'Lote'=>'1',
            'Fecha_vencimiento'=>'2020/05/12',
            'Precio'=>'1'
          ]);
          Producto::create([
            'Producto'=>'Producto 2',
            'Cantidad'=>'20',
            'Lote'=>'12',
            'Fecha_vencimiento'=>'2019/02/20',
            'Precio'=>'12'
          ]);
          Producto::create([
            'Producto'=>'Producto 3',
            'Cantidad'=>'30',
            'Lote'=>'123',
            'Fecha_vencimiento'=>'2021/05/23-',
            'Precio'=>'123'
          ]);
          Factory(Producto::class)->times(5)->create();
    }
}
