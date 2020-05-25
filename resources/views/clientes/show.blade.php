@extends('admin.layout')

@section('title', 'Contratos | ' . $cliente->nombre)

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			<div class="bg-white p-5 shadow rounded">
					<h1>{{$cliente->nombre}}</h1>
				<div class="form-group" >
					<label for="title">alias</label><br>
					<p class="text-black-50">{{$cliente->alias}}</p>
				</div>
				<div class="form-group">
					<label for="title">telefono</label><br>
					<p class="text-black-50">{{$cliente->telefono}}</p>
				</div>
				<div class="form-group">
					<label for="title">Estado</label><br>
					<p class="text-black-50">{{$cliente->estado}}</p>
				</div>
					<div class="d-flex justify-content-between align-items-center">
						<a href="{{ route('clientes.index') }}">Volver</a>
					<div class="btn-group">
							<a class="btn btn-success" href="{{ route('clientes.edit', $cliente) }}">Editar</a>
							<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-contrato').submit()">Eliminar</a>
					</div>

					<form id="delete-contrato" class="d-none" method="POST" action="{{ route('clientes.destroy', $cliente) }}">
								@csrf @method('DELETE')
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection