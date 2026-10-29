@extends('layouts.app')
@section('titulo', 'Listado de libros')
@section('contenido')
    <h2>Lista de libros</h2>
    @if($libros->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Año de publicación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <td>{{ $libro->id }}</td>
                        <td>{{ $libro->titulo }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->anio_publicacion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mensaje">No hay libros</p>
    @endif
@endsection