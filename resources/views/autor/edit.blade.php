@extends('dashboard')
@section('section')
	<div class="row">
		<div class="col-12">
			<h3 class="crud-title">ACTUALIZAR DATOS DE "{{mb_strtoupper($autor->autor)}}"</h3>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form method="POST" action="{{ route('autor.update',$autor->idautor) }}">
				@csrf
				<input name="_method" type="hidden" value="PATCH">
                <label for="autor">NOMBRE</label>
                <input type="text" name="autor" class="form-control" value="{{ $autor->autor}}" required="">
                <label for="autor">EMAIL</label>
                <input type="email" name="email" class="form-control" value="{{ $autor->email}}" required="">
                <label for="autor">NACIONALIDAD</label>
                <input type="text" name="nacionalidad" class="form-control" value="{{ $autor->nacionalidad}}" required="">
				<div>
					<br>
				</div>
				<button type="submit" onclick="return confirm('CONFIRME QUE DESEA GUARDAR LOS CAMBIOS PARA ESTE REGISTRO')" class="btn btn-info">GUARDAR CAMBIOS &nbsp<i class="fas fa-save"></i></button>&nbsp&nbsp&nbsp&nbsp
				<a href="{{ route('autor.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
			</form>	
		</div>
	</div>
@stop
