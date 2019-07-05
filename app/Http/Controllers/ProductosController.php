<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Producto;

class ProductosController extends Controller
{
  public function index()
  {

        $Productos = Producto::all();



        $title = 'Productos';
        return view('productos.index', compact('title', '
        Productos'))->with('Productos', $Productos);
  }
  public function show(Producto $Productos)
    {
        return view('productos.show')->with('Productos', $Productos);
    }
  public function create()
    {
      return view('productos.create');
    }
  public function store()
    {
      $data = request()->all();

        Producto::create([
          'Producto'=>$data['Producto'],
          'Cantidad'=>$data['Cantidad'],
          'Lote'=>$data['Lote'],
          'Fecha_vencimiento'=>$data['Fecha_vencimiento'],
          'Precio'=>$data['Precio']
        ]);

         return redirect()->Route('productos.index');
    }
    public function comprar(){
      return view('comprar.index');
    }
    public function factura(){

      $title= 'comprar';
      $producto = Producto::get();

      // dd($producto);

      return view('comprar.factura', compact('title', 'producto'))->with('producto', $producto);
    }
}
