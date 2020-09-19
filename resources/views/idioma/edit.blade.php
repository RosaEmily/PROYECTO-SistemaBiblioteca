@extends('dashboard')
@section('section')
	<div class="row">
		<div class="col-12">
			<h3 class="crud-title">ACTUALIZAR DATOS DE "{{mb_strtoupper($idioma->idioma)}}"</h3>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form method="POST" action="{{ route('idioma.update',$idioma->ididioma) }}">
				@csrf
				<input name="_method" type="hidden" value="PATCH">
                <label for="idioma">IDIOMA</label>
                <input type="text" name="idioma" class="form-control" value="{{ $idioma->idioma}}" required="">
				<div>
					<br>
				</div>
				<button type="submit" onclick="return confirm('CONFIRME QUE DESEA GUARDAR LOS CAMBIOS PARA ESTE REGISTRO')" class="btn btn-info">GUARDAR CAMBIOS &nbsp<i class="fas fa-save"></i></button>&nbsp&nbsp&nbsp&nbsp
				<a href="{{ route('idioma.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
			</form>	
		</div>
	</div>
@stop