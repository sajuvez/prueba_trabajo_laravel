@extends('layout')

@section('title ', "producto {$Productos->Producto}")

@section('content')

  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
    <div class="card-header"> Producto: {{ $Productos->Producto }} </div>
    <div class="card-body">
      <h5 class="card-title">Nombre del producto:<br> {{$Productos->Producto}}</h5>
      <p class="card-text">Cantidad:<br> {{$Productos->Cantidad}}</p>
    </div>
  </div>
        <p>
          <a href="{{url('/productos')}}">Regresar al listado de proyectos</a>
        </p>

@endsection
