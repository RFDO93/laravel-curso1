@extends('layout')
@section('title',$title)
@section('contenido')

  <div class="card text-white bg-dark">
    <div class="card-header">
      <h4 class="card-title">
        <a class="btn btn-sm btn-secondary" href="{{route('users')}}">
          <i class="fas fa-arrow-left"></i>
        </a>&nbsp;Detalle del usuarios Nº ({{$user->id}})</h4>
    </div>
    <div class="card-body">
      <p>Nombre : {{$user->name}}</p>
      <p>Email : {{$user->email}}</p>
      <p>Profesion : {{$user->profession->title}}</p>
    </div>
  </div>

@endsection
