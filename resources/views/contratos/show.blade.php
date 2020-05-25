@extends('admin.layout')

@section('title', 'Contratos | ' . $cliente->nombre)

@section('content')
<div class="container">
	<div class="bg-white p-5 shadow rounded">
			<h1 align="center">{{$cliente->nombre}}</h1>
		<div class="form-group" >
			<label for="title">Horas Contratadas</label><br>
			<p class="text-black-50">{{$contrato->horas_contratadas}}</p>
		</div>
		<div class="form-group">
			<label for="title">Horas Restantes</label><br>
			<p class="text-black-50">{{$contrato->horas_restantes}}</p>
		</div>
		<div class="form-group">
			<label for="title">Inicio de Contrato</label><br>
			<p class="text-black-50">{{$contrato->fecha_inicio}}</p>
		</div>
		<div class="form-group">
			<label for="title">Finalizacion de contrato</label><br>
			<p class="text-black-50">{{$contrato->fecha_fin}}</p>
		</div>
		<div class="form-group">
			<label for="title">Estado del Contrato</label><br>
			<p class="text-black-50">{{$contrato->estado}}</p>
		</div>
			<div class="d-flex justify-content-between align-items-center">
				<a href="{{ route('contratos.index') }}">Volver</a>
			<div class="btn-group">
					<a class="btn btn-success" href="{{ route('contratos.edit', $contrato) }}">Editar</a>
					<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-contrato').submit()">Eliminar</a>
			</div>

			<form id="delete-contrato" class="d-none" method="POST" action="{{ route('contratos.destroy', $contrato) }}">
						@csrf @method('DELETE')
			</form>
		</div>
	</div>
</div>
@endsection