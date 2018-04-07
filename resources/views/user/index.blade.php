@extends('layout')
@section('title',$title)
@section('contenido')

<div class="table-responsive">
  <table class="table">
    <thead class="thead-dark">
      <th colspan="3">{{$title}}</th>
      <th><a href="{{route('users.create')}}" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></a></th>
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
        @if($value->profession)
        <td>{{$value->profession->title}}</td>
        @else
        <td> - </td>
        @endif
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
