@extends('admin.layout')

@section('title', 'Editar Contrato')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto" >

		@include('partials.validation-errors')
		<form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('contratos.update', $contrato) }}">
			@method('PATCH')
			@csrf
			<h1 align="center">Editar Contrato</h1>
			<h2>{{ $cliente->nombre }}</h2>
			<div class="form-group">
			<label for="title">Horas Contratadas</label><br>
			<input class="form-control border-0 bg-light shadow-sm" id="horas_contratadas" type="text" name="horas_contratadas" value="{{ $contrato->horas_contratadas }}"><br>
			</div>
			<div class="form-group">
			<label for="title">Horas Restantes</label><br>
			<input class="form-control border-0 bg-light shadow-sm" id="horas_restantes" type="text" name="horas_restantes" value="{{ $contrato->horas_restantes }}"><br>
			</div>
			<div class="form-group">
			<label for="title">Fecha Inicio de Contrato</label><br>
			<input class="form-control border-0 bg-light shadow-sm" type="date" name="fecha_inicio" step="1" min="2020-01-01" max="2022-12-31" value="{{$contrato->fecha_inicio}}"><br>
			</div>
			<div class="form-group">
			<label for="title">Fecha Fin de Contrato</label><br>
			<input class="form-control border-0 bg-light shadow-sm" type="date" name="fecha_fin" step="1" min="2020-01-01" max="2022-12-31" value="{{$contrato->fecha_fin}}"><br>
			</div>
			<div class="form-group">
			<label for="title">Estado de Contrato</label><br>
			<input class="form-control border-0 bg-light shadow-sm" type="text" name="estado" value="{{ $contrato->estado }}"><br>
			</div>
			<div>
			<button class="btn btn-primary btn-lg btn-block">Actualizar</button>
			<a class="btn btn-link btn-block" href="{{ route('contratos.index') }}">Cancelar</a>
			</div>
		</form>
		</div>
	</div>
</div>

@endsection