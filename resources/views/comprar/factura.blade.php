@extends('layout')


@section('content')
    <h1>{{$title}}</h1>
@php
$product_name = $_POST['Producto'];
  $cantidad = $_POST['Cantidad'];
  echo $product_name;
  @endphp

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

        {{-- @forelse($producto as $productos)


            <tbody>
              <tr>

                <th scope="row">{{$producto->Cantidad}}</th>
                <td>{{$Producto->Cantidad}}</td>
                <td>{{$Producto->Lote}}</td>
                <td>{{$Producto->Fecha_vencimiento}}</td>
                <td>${{$Producto->Precio}}</td>

                <td> <a href="{{route('productos.show',['Producto'=>$Producto->Lote])}}">Ver detalles </a></td>
              </tr>

            </tbody>

        @empty
          <li>No hay productos para mostrar.</li>
        @endforelse --}}
    </table>


@endsection

@section('sidebar')
  <h5>LOL esta es la barra lateral
  <br>
  <a href="{{route('productos.create')}}">Crear Proyecto</a></h5>
@endsection
