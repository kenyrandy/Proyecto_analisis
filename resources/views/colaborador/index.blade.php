@extends('admin.layout')

@section('title', 'Usuarios')

@section('content')
{{-- {{ dd($clientes)}} --}}
<div class="container">
	<div class="d-flex justify-content-between aling-items-center mb-6">
	<h1 class="display-4 mb-0">Usuarios</h1>
	<a class="btn btn-primary mb-5" href="{{ route('colaboradores.create') }}">Agregar usuario</a>
	</div>

	<table class="table table-light">
  	<thead class="thead-dark">
	    <tr>
	      <th scope="col">Nombre</th>
	      <th scope="col">Email</th>
	      <th scope="col">Autorizacion</th>
	      <th scope="col"></th>
	    </tr>
  	</thead>
  	<tbody>
  	@forelse($colaboradores as $colaborador)
  		{{-- @foreach($colaboradors as $colaborador) --}}
	    <tr>
	      <td>{{ $colaborador->nombre }}</td>
	      <td>{{ $colaborador->alias }}</td>
	      {{-- <td>{{ $contrato->horas_restantes }}</td> --}}
	      <td>{{ $colaborador->created_at }}</td>
	      {{-- <td>{{ $contrato->fecha_fin }}</td> --}}
	      {{-- <td>{{ $contrato->estado }}</td> --}}
	      <td>
	      	<a class="btn btn-success" href="{{ route('colaboradores.show', $colaborador) }}">Mostrar</a></td>
	    </tr>
	    {{-- @endforeach --}}

    @emptyn
    	<th scope="row">0</th>
	    <td>No hay usuarios</td>
    @endforelse
  </tbody>
</table>
</div>
@endsection