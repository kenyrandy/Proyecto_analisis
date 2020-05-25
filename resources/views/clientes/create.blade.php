@extends('admin.layout')

@section('title', 'Nuevo Cliente')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
		@include('partials.validation-errors')
		<form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('clientes.store', $cliente) }}">
			<h1>Nuevo cliente</h1>
			@include('clientes._form', ['btnText' => 'Guardar'])
		</div>
	</div>
</div>
@endsection