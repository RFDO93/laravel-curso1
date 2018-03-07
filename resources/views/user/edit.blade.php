@extends('layout')
@section('title',$title)
@section('contenido')
  <h1>{{$title}}</h1>
  <p>Usuario con el id = {{$id}}</p>
@endsection
