@extends('layout')

@section('title ', "Comprar Producto")

@section('content')
  <h1>Comprar Producto</h1>

  <form method="POST" action="{{ url('factura') }}">
    {!!  csrf_field() !!}
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Producto">Producto</label>
        <input type="text" name="Producto" class="form-control" placeholder="Producto"  id="Producto_compra">
      </div>
      <div class="form-group col-md-6">
        <label for="Cantidad">Cantidad</label>
        <input type="number" name="Cantidad" class="form-control" placeholder="Cantidad" id="Cantidad_compra">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Comprar</button>
  </form>
        <p>
          <a href="{{url('/productos.create')}}">Regresar al listado de productos</a>
        </p>

@endsection
