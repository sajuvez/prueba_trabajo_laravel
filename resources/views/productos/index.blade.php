@extends('layout')


@section('content')
    <h1>{{$title}}</h1>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Producto</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Lote </th>
          <th scope="col">Fecha Vencimiento</th>
          <th scope="col">Precio</th>

        </tr>
      </thead>
        @forelse($Productos as $Producto)


            <tbody>
              <tr>
                <th scope="row">{{$Producto->Producto}}</th>
                <td>{{$Producto->Cantidad}}</td>
                <td>{{$Producto->Lote}}</td>
                <td>{{$Producto->Fecha_vencimiento}}</td>
                <td>${{$Producto->Precio}}</td>

                <td> <a href="{{route('productos.show',['Producto'=>$Producto->Lote])}}">Ver detalles </a></td>
              </tr>

            </tbody>

        @empty
          <li>No hay proyectos registrados.</li>
          <li><a href="{{url('/productos/nuevo')}}">agregar productos </a> </li>
        @endforelse
    </table>


@endsection

@section('sidebar')
  <h5>LOL esta es la barra lateral
  <br>
  <a href="{{route('productos.create')}}">Crear Proyecto</a></h5>
@endsection
