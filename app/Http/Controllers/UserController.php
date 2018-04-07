<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){

      //$users = DB::table('users')->get();

      //$users = User::all();

      //$title = 'Listado de usuarios';

      //return view('user.index', compact('users','title')  );

      return view('user.index')
      ->with('users',User::all())
      ->with('title','Listado de usuarios');
    }

    public function show(User $user){

      /*$user = User::find($id);

      if ($user == null) {
        //return view('errors.404');
        return response()->view('errors.404',[],404);
      }*/

      /*$user = User::findOrFail($id);

      $title = 'Detalle usuario';

      return view('user.detail',['title' => $title,'user' => $user]);*/

      $title = 'Detalle usuario';

      return view('user.detail',['title' => $title,'user' => $user]);
    }

    public function create(){

      $title = 'Crear Nuevo usuario';

      return view('user.create',['title' => $title]);
    }

    public function edit($id){

      $title = 'Editar usuario';

      return view('user.edit', ['title' => $title,'id' => $id]);
    }

    public function store(){

      $data = request()->validate([
        'nombre'   => 'required',
        'email'    => 'required|email|unique:users,email',
        'clave' => 'required|min:6|max:12',
      ],
      [
        'nombre.required' => 'El campo nombre debe ser obligatorio.',
        'email.required' => 'El campo email debe ser obligatorio.',
        'email.email'   => 'El campo email debe ser de formato email.',
        'email.unique' => 'El email ya ha sido registrado.',
        'clave.required' => 'El campo password debe ser obligatorio.',
        'clave.min' => 'La clave debe ser minimo de 6 caracteres',
        'clave.max' => 'La clave debe ser maximo de 12 caracteres',
      ]);

      User::create([
          'name'      => $data['nombre'],
          'email'     => $data['email'],
          'password'  => bcrypt($data['clave']),
      ]);

      return redirect()->route('users');
    }
}
