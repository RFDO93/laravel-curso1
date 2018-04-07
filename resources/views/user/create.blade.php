@extends('layout')
@section('title',$title)
@section('contenido')
  <h1>Crear Usuario</h1>
  @if($errors->any())
    <div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $err)
      <p>{{$err}}</p>
    @endforeach
    </div>

  @endif
  <form action="{{route('users.crear',[])}}" method="post" name="form_new_user">
    {!! csrf_field() !!}
    <form>
      <fieldset class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control @if($errors->has('nombre')) is-invalid @endif" id="nombre" name="nombre" value="{{old('nombre')}}">
      </fieldset>
      <fieldset class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control @if($errors->has('email')) is-invalid @endif" id="email" name="email" value="{{old('email')}}">
      </fieldset>
      <fieldset class="form-group">
        <label for="clave">Clave</label>
        <input type="password" class="form-control @if($errors->has('clave')) is-invalid @endif" id="clave" name="clave">
      </fieldset>
      <button type="submit" class="btn btn-primary">Crear</button>
    </form>
  </form>
@endsection
