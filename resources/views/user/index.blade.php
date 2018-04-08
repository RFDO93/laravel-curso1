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
        <td>
          <div class="row">
            <a class="btn btn-secondary btn-sm" href="{{route('users.show',['id'=>$value->id])}}">
              <i class="fas fa-clipboard-check">
              </i>
            </a>
            <a class="btn btn-info btn-sm" href="{{route('users.edit',['id'=>$value->id])}}">
              <i class="fas fa-edit">
              </i>
            </a>
            <div style="float:left">
              <form action="{{route('users.delete',['id'=>$value->id])}}" method="post" name="form-delete">
                {!!csrf_field()!!}
                {!!method_field('DELETE')!!}
                <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
              </form>
            </div>
          </div>
        </td>

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
