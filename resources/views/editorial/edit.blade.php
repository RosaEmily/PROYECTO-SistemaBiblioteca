@extends('dashboard')
@section('section')
	<div class="row">
		<div class="col-12">
			<h3 class="crud-title">ACTUALIZAR DATOS DE "{{mb_strtoupper($editorial->editorial)}}"</h3>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form method="POST" action="{{ route('editorial.update',$editorial->ideditorial) }}">
				@csrf
				<input name="_method" type="hidden" value="PATCH">
                <label for="editorial">NOMBRE</label>
                <input type="text" name="editorial" class="form-control" value="{{ $editorial->editorial}}" required="">
                <label for="editorial">TELÉFONO</label>
                <input type="text" name="telefono" class="form-control" value="{{ $editorial->telefono}}" required="">
                <label for="editorial">EMAIL</label>
                <input type="email" name="email" class="form-control" value="{{ $editorial->email}}" required="">
                <label for="editorial">DIRECCIÓN</label>
                <input type="text" name="direccion" class="form-control" value="{{ $editorial->direccion}}" required="">
				<div>
					<br>
				</div>
				<button type="submit" onclick="return confirm('CONFIRME QUE DESEA GUARDAR LOS CAMBIOS PARA ESTE REGISTRO')" class="btn btn-info">GUARDAR CAMBIOS &nbsp<i class="fas fa-save"></i></button>&nbsp&nbsp&nbsp&nbsp
				<a href="{{ route('editorial.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
			</form>	
		</div>
	</div>
@stop
