@csrf
			<div class="form-group">
			<label for="title">Nombre cliente</label><br>
			<input class="form-control border-0 bg-light shadow-sm" type="text" name="nombre" value="{{ old('nombre', $cliente->nombre) }}" ><br>
			</div>
			<div class="form-group">
			<label for="title">Alias</label><br>
			<input class="form-control border-0 bg-light shadow-sm" type="text" name="alias" value="{{ old('alias', $cliente->alias) }}" ><br>
			</div>
			<div class="form-group">
			<label for="title">Telefono</label><br>
			<input class="form-control border-0 bg-light shadow-sm" type="text" name="telefono" value="{{ old('telefono', $cliente->telefono) }}" ><br>
			</div>
			<div class="form-group">
			<label for="title">Estado</label><br>
			<select class="form-control border-0 bg-light shadow-sm" name="estado">
				@if($cliente->estado === 'I')
					<option value="I">Inactivo</option>
					<option value="A">Activo</option>
				@else
					<option value="A">Activo</option>
					<option value="I">Inactivo</option>
				@endif
			</select>
			</div>
			<div>
			<button class="btn btn-primary btn-lg btn-block">{{$btnText}}</button>
			<a class="btn btn-link btn-block" href="{{ route('clientes.index') }}">Cancelar</a>
			</div>