<?php

namespace App\Http\Controllers;
use Illuminate\Support\Fascades\DB;
use App\User;
use App\Diagnostico;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function usuarios()
    {

      $usuarios  = User::all();

      $title_user='Listado de Usuarios';
    }
}
