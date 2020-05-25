@extends('admin.layout')

@section('title', 'Contratos')

@section('content')
<div class="container">
	@if(session('status'))
				<h5>{{ session('status') }}</h5>
	@else
	<div class="d-flex justify-content-between aling-items-center mb-1">
	<h1 class="display-4 mb-0">Contratos</h1>
	<a class="btn btn-primary mb-5" href="{{ route('contratos.create') }}">Crear contrato</a>
	</div>

	<table id="table" class="table table-light">
  	<thead class="thead-dark">

	    <tr>
	 	  <th scope="col">#</th>
	      <th scope="col">Cliente</th>
	      <th scope="col">HRS Contratadas</th>
	      {{-- <th scope="col">HRS Restantes</th> --}}
	      <th scope="col">Estado</th>
	      <th scope="col">Fecha Inicio</th>
	      {{-- <th scope="col">Fecha Fin</th> --}}
	      {{-- <th scope="col">Estado</th> --}}
	      <th scope="col"></th>
	    </tr>
  	</thead>
  	<tbody>
  	@forelse($cliente as $clientes)
  		@foreach($clientes->contratos as $contrato)
	    <tr>
	      <th scope="row">1</th>
	      <td>{{ $clientes->nombre }}</td>
	      <td>{{ $contrato->horas_contratadas }}</td>
	      {{-- <td>{{ $contrato->horas_restantes }}</td> --}}
	      <td>{{ $contrato->estado }}</td>
	      <td>{{ $contrato->fecha_inicio }}</td>
	      {{-- <td>{{ $contrato->fecha_fin }}</td> --}}
	      {{-- <td>{{ $contrato->estado }}</td> --}}
	      <td>
	      	<a class="btn btn-success" href="{{ route('contratos.show', $contrato) }}">Mostrar</a></td>
	    </tr>
	    @endforeach

    @empty
    	<th scope="row">0</th>
	    <td>No hay contratos</td>
    @endforelse
  </tbody>
</table>
</div>
			@endif

@endsection