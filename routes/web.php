
<?php

//-----------------------------------------ruta inicio de sesion-----------------------------------------


Route::get('/', function() {
  return view('auth.login');
});
//-----------------------------------------rutas de los Productos-----------------------------------------


Route::get('/productos', 'ProductosController@index', function(){

})->name('productos.index')->middleware('auth');

Route::get('/producto/{producto}', 'ProductosController@show',function() {
    // Solo se permite el acceso a usuarios autenticados

  })->where('Lote', '[0-9]+')->name('productos.show')->middleware('auth');

Route::get('/productos/nuevo', 'ProductosController@create',function() {
    // Solo se permite el acceso a usuarios autenticados
})->middleware('auth')->name('productos.create');

Route::Post('/productos/', 'ProductosController@store',function() {
    // Solo se permite el acceso a usuarios autenticados
})->middleware('auth');
Route::Post('/Register/', 'ProductosController@index', function(){

})->name('productos.index')->middleware('auth');

Route::get('/home','ProductosController@index', function(){

})->name('productos.index')->middleware('auth');

Route::get('/comprar','ProductosController@comprar', function(){

})->name('comprar.index')->middleware('auth');

Route::POST('/factura/','ProductosController@factura', function(){
$producto_compra=$_Post['$producto_compra'];
$cantidad_compra = $post['$cantidad_compra'];
})->name('comprar.factura')->middleware('auth');
Route::get('/agregar_productos','ProductosController@create', function(){
  return view('productos.create');
});

Auth::routes();
