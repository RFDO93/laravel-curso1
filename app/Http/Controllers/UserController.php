<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
      return "Usuarios";
    }

    public function show($id){
      return "Detalle del usuario con el id: {$id} ";
    }

    public function create(){
      return 'Crear Nuevo usuario';
    }

    public function edit($id){
      return "Editar usuario con el id: {$id}";
    }
}
