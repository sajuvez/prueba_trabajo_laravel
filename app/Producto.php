<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $fillable = [
    'Producto', 'Cantidad', 'Lote', 'Fecha_vencimiento', 'Precio'
  ];
}
