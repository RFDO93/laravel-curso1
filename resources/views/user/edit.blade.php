@extends('layout')
@section('title',"Editar Usuarios")
@section('contenido')
  <h1>Editar Usuario</h1>
  @if($errors->any())
    <div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $err)
      <p>{{$err}}</p>
    @endforeach
    </div>

  @endif

  @if($user)
  <form action="{{route('users.update',['user' => $user])}}" method="POST" name="form_edit_user">
    {!! csrf_field() !!}
    {!! method_field('PUT') !!}
    <form>
      <fieldset class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control @if($errors->has('nombre')) is-invalid @endif" id="nombre" name="nombre" value="{{old('nombre',$user->name)}}">
      </fieldset>
      <fieldset class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="email" name="email" value="{{old('email',$user->email)}}">
      </fieldset>
      <fieldset class="form-group">
        <label for="clave">Clave</label>
        <input type="password" class="form-control @if($errors->has('clave')) is-invalid @endif" id="clave" name="clave">
      </fieldset>
      <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </form>
@else
<h1>Usuario no existe</h1>
@endif
@endsection
