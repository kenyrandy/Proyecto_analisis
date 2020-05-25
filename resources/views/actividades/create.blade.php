@extends('admin.layout')

@section('title', 'Actividades')

@section('content')
	<h1>Ingresar actividad</h1>
	<a href="{{ route('actividades.create') }}">Insertar actividad</a>

@endsection