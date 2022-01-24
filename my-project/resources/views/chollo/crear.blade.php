@extends('inicio')

@section('crear')
<form action="{{route('chollo.crear')}}" method="POST">
    @csrf
    
    <input type="text" name="titulo" placeholder="Título del chollo" class="form-control mb-2" autofocus>
    <input type="text" name="descripcion" placeholder="Descripción del chollo" class="form-control mb-2">

    <button type="submit">Crear nuevo chollo</button>

@endsection