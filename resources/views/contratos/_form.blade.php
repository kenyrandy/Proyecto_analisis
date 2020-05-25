@csrf
			<h2>cliente</h2>
			<label for="title" >Horas Contratadas</label><br>
			<input type="text" name="horas_contratadas" value="{{ old('horas contratadas', $contrato->horas_contratadas) }}"><br>
			<label for="title">Horas Restantes</label><br>
			<input type="text" name="horas_restantes" value="{{ old('title', $contrato->horas_contratadas) }}"><br>
			<label for="title">Fecha Inicio de Contrato</label><br>
			<input type="text" name="fecha_inicio" ><br>
			<label for="title">Fecha Fin de Contrato</label><br>
			<input type="text" name="fecha_fin" ><br>
			<label for="title">Estado de Contrato</label><br>
			<input type="text" name="estado" ><br>
			<div>
			<button>Actualizar</button>
			</div>