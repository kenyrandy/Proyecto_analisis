@extends('admin.layout')

@section('title', 'Crear Contrato')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
		@include('partials.validation-errors')
		<form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('contratos.store', $contrato) }}">
			@if(session('status'))
				<h5 class="">{{ session('status') }}</h5>
			@endif
			<h1>Nuevo contrato</h1>
			@csrf
			{{-- <h2>{{ $cliente->nombre }}</h2> --}}
			<div class="form-group">
			<label for="title">Cliente</label><br>
			<select class="form-control border-0 bg-light shadow-sm" name="cliente_id">
				@foreach($cliente->all() as $cli)
				   <option value="{{$cli->id}}">{{$cli->nombre}}</option>
				@endforeach
			</select>
			</div>
			<div class="form-group">
			<label for="title">Horas Contratadas</label><br>
			<input class="form-control border-0 bg-light shadow-sm" type="text" name="horas_contratadas" value="{{ old('horas_contratadas') }}" ><br>
			</div>
			<div class="form-group">
			<label for="title">Fecha Inicio de Contrato</label><br>
			<input class="form-control border-0 bg-light shadow-sm" type="date" name="fecha_inicio" step="1" min="2020-01-01" max="2022-12-31" value="{{ old('fecha_inicio', "2020-01-01") }}"><br>
			</div>
			<div class="form-group">
			<label for="title">Fecha Fin de Contrato</label><br>
			<input class="form-control border-0 bg-light shadow-sm" type="date" name="fecha_fin" step="1" min="2020-01-01" max="2022-12-31" value="{{ old('fecha_fin','2020-01-01')}}"><br>
			</div>
			<div>
			<button class="btn btn-primary btn-lg btn-block">Crear</button>
			<a class="btn btn-link btn-block" href="{{ route('contratos.index') }}">Cancelar</a>
			</div>
		</div>
	</div>
</div>
@endsection