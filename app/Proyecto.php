<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
  protected $fillable = [
    'Nombre', 'Cantidad', 'Lote', 'Fecha_vencimiento', 'Precio'
  ];

  // public function Diagnostico(){
  //     return $this->hasMany(Diagnostico::class);
  //  }


}
