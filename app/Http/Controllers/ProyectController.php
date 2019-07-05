<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Proyecto;


class ProyectController extends Controller
{
  public function index()
  {

        $proyectos = Proyecto::all();



        $title = 'Proyectos';
        return view('proyectos.index', compact('title', 'proyectos'));
  }
  public function show(Proyecto $proyecto)
    {
        return view('proyectos.show', compact('proyecto'));
    }
  public function create()
    {
      return view('proyectos.create');
    }
  public function store()
    {
      $data = request()->all();

        Proyecto::create([
          'Nombre'=>$data['Nombre'],
          'Cantidad'=>$data['Cantidad'],
          'Lote'=>$data['Lote'],
          'Fecha_vencimiento'=>$data['Fecha_vencimiento'],
          'Precio'=>$data['Precio']
        ]);

         return redirect()->Route('proyectos.index');
    }

}
