<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

      if (request()->has('empty')) {
        $user = [];
      }else{
        $user = [
          'Richard Dorta',
          'Jose peres',
          'Karelys saez',
          'Samuel garcia',
          'Juan gonzales'
        ];
      }

      $title = 'Listado de usuarios';

      return view('user.index', compact('user','title')  );
    }

    public function show($id){

      $title = 'Detalle usuario';

      return view('user.detail',['title' => $title,'id' => $id]);
    }

    public function create(){

      $title = 'Crear Nuevo usuario';

      return view('user.create',['title' => $title]);
    }

    public function edit($id){

      $title = 'Editar usuario';

      return view('user.edit', ['title' => $title,'id' => $id]);
    }
}
