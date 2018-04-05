@extends('layout')
@section('title',$title)
@section('contenido')

<div class="table-responsive">
  <table class="table">
    <thead class="thead-dark">
      <th colspan="4">{{$title}}</th>
    </thead>
    <thead>
      <th>Nombre</th>
      <th>Email</th>
      <th>Profesion</th>
      <th>Enlace</th>
    </thead>
    <tbody>
    @forelse ($users as $value)
      <tr>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->profession->title}}</td>
        <td><a class="btn btn-secondary btn-sm" href="{{route('users.show',['id'=>$value->id])}}"><i class="fas fa-clipboard-check"></i></a></td>
      </tr>
    @empty
      <tr>
        <td>No hay usuarios registrados</td>
      </tr>
    @endforelse
    </tbody>
  </table>
</div>
@endsection
