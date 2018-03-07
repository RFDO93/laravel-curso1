@extends('layout')
@section('title',$title)
@section('contenido')
<h3>{{$title}}</h3>
<ul>
  @forelse ($user as $value)
    <li>{{$value}}</li>
  @empty
    <li>No hay usuarios registrados</li>
  @endforelse
</ul>
@endsection
