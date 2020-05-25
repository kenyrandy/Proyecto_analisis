@csrf
			<div class="form-group">
			<label for="title">Nombre Usuario</label><br>
			<input class="form-control border-0 bg-light shadow-sm" type="text" name="nombre" value="{{ old('nombre', $colaborador->nombre) }}" ><br>
			</div>
			<div class="form-group">
			<label for="title">Email</label><br>
			<input class="form-control border-0 bg-light shadow-sm" type="text" name="email" value="{{ old('email', $colaborador->email) }}" ><br>
			</div>
			<div class="form-group">
			<label for="title">Contraseña</label><br>
			<input class="form-control border-0 bg-light shadow-sm" type="password" name="password" value="{{ old('telefono', $colaborador->password) }}" ><br>
			</div>
			<div class="form-group">
			<label for="title">Verificar Contraseña</label><br>
			<input class="form-control border-0 bg-light shadow-sm" type="text" name="telefono" value="{{ old('telefono', $colaborador->telefono) }}" ><br>
			</div>
			<div class="form-group">
			<label for="title">Estado</label><br>
			<select class="form-control border-0 bg-light shadow-sm" name="estado">
				@if($colaborador->estado === 'I')
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
			<a class="btn btn-link btn-block" href="{{ route('colaboradors.index') }}">Cancelar</a>
			</div>