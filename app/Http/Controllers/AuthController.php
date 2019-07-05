<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      return view('proyectos.index');
  }
  // /**
  //  * Muestra el formulario para login.
  //  */
  // public function showLogin()
  // {
  //     // Verificamos que el usuario no esté autenticado
  //     if (Auth::check())
  //     {
  //         // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
  //         return Redirect::to('/');
  //     }
  //     // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
  //     return View::make('login');
  // }
}
