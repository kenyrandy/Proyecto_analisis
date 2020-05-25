@extends('admin.layout')

@section('title', 'Clientes')

@section('content')
{{-- {{ dd($clientes)}} --}}

<div class="container">
	<div class="d-flex justify-content-between aling-items-center mb-6">
	<h1 class="display-4 mb-0">Clientes</h1>
	<a class="btn btn-primary mb-5" href="{{ route('clientes.create') }}">Crear cliente</a>

	</div>


	<table id="table" class="table table-light">
  	<thead class="thead-dark">
	    <tr>
	      <th scope="col">Nombre</th>
	      <th scope="col">Alias</th>
	      <th scope="col">Estado</th>
	      <th scope="col">Fecha de Creacion</th>
	      <th scope="col"></th>
	    </tr>
  	</thead>
  	<tbody>
  	@forelse($clientes as $cliente)
	    <tr>
	      <td>{{ $cliente->nombre }}</td>
	      <td>{{ $cliente->alias }}</td>
	      <td>{{ $cliente->estado }}</td>
	      <td>{{ $cliente->created_at }}</td>
	      <td>
	      	<a class="btn btn-success" href="{{ route('clientes.show', $cliente) }}">Mostrar</a></td>
	    </tr>
	    {{-- @endforeach --}}

    @empty
    	<th scope="row">0</th>
	    <td>No hay contratos</td>
    @endforelse
  </tbody>
</table>
</div>
@endsection