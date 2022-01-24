@extends('inicio')

@section('chollo')
    <h1>Detalle de la chollo</h1>

    <h3>ID: {{ $chollo -> id }}</h3>
    <h3>Título: {{ $chollo -> titulo }}</h3>
    <h3>Descripción: {{ $chollo -> descripcion }}</h3>   
    <h3>URL: {{ $chollo-> url }}</h3>
    <h3>Categoría: {{ $chollo -> categoria }}</h3>
    <h3>Puntuación: {{ $chollo -> puntuacion }}</h3>
    <h3>Precio: {{ $chollo -> precio }}</h3> 
    <h3>Precio descuento: {{ $chollo -> descuento }}</h3> 
    <h3>Disponible: {{ $chollo -> disponible }}</h3> 
@endsection