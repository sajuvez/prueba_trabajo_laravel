@extends('layout')

@section('title ', "Crear proyecto")

@section('content')
  <h1>Crear Producto</h1>

 {{-- <form method="POST" action="{{ url('proyectos') }}">
     {{ csrf_field() }}

     <button type="submit">Crear nuevo proyecto</button>
 </form> --}}
  <form method="POST" action="{{ url('productos') }}">
    {!!  csrf_field() !!}
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Producto">Producto</label>
        <input type="text" name="Producto" class="form-control" placeholder="Producto"  id="Producto">
      </div>
      <div class="form-group col-md-6">
        <label for="Cantidad">Cantidad</label>
        <input type="number" name="Cantidad" class="form-control" placeholder="Cantidad" id="Cantidad">
      </div>
      <div class="form-group col-md-6">
        <label for="Lote">Lote</label>
        <input type="number" name="Lote" class="form-control" placeholder="Lote"  id="Lote">
      </div>
      <div class="form-group col-md-6">
        <label for="Fecha_vencimiento">Fecha vencimiento</label>
        <input type="date" name="Fecha_vencimiento" class="form-control" placeholder="Fecha vencimiento"  id="Fecha_vencimiento">
      </div>
      <div class="form-group col-md-6">
        <label for="Precio">Precio</label>
        <input type="number" name="Precio" class="form-control" placeholder="Precio"  id="Precio">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Crear nuevo producto</button>
  </form>
        <p>
          <a href="{{url('/proyectos')}}">Regresar al listado de productos</a>
        </p>

@endsection
