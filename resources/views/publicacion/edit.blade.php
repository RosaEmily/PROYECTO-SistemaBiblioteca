@extends('dashboard')
@section('section')
	<div class="row">
		<div class="col-12">
			<h3 class="crud-title">ACTUALIZAR DATOS DE "{{mb_strtoupper($publicacion->publicacion)}}"</h3>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form method="POST" action="{{ route('publicacion.update',$publicacion->idpublicacion) }}">
				@csrf
				<input name="_method" type="hidden" value="PATCH">
				<div class="row">
					<div class="col" style="padding: 0px; padding-right:20px;">
						<label for="publicacion">TÍTULO</label>
						<input type="text" name="publicacion" class="form-control" value="{{ $publicacion->publicacion}}" required="">
						<label for="publicacion">EDICIÓN</label>
						<input type="text" name="edicion" class="form-control" value="{{ $publicacion->edicion}}" required="">
						<label for="publicacion">ISBN/ISSN</label>
						<input type="text" name="ISBNISSN" class="form-control" value="{{ $publicacion->ISBNISSN}}" required="">
						<label for="publicacion">TIPO</label>
						<select name="tipo" class="custom-select" required>
                            <option value="LIBRO" {{"LIBRO"==$publicacion->tipo ? 'selected' : ''}}>LIBRO</option>
                            <option value="REVISTA" {{"REVISTA"==$publicacion->tipo ? 'selected' : ''}}>REVISTA</option>
                        </select>
						<label for="publicacion">AUTOR</label>
						<select name="idautor" class="custom-select" required>
							@foreach($autores as $autor)
								<option value="{{$autor->idautor}}" {{$autor->idautor==$publicacion->idautor ? 'selected' : ''}}>{{$autor->autor}}</option>
							@endforeach
						</select>
					</div>
					<div class="col" style="padding: 0px; padding-left:20px;">
						<label for="publicacion">AÑO DE PUBLICACIÓN</label>
						<select name="aniodepublicacion" class="custom-select" required>
							@for($i = date("Y"); $i>=1950;$i--)
								<option value="{{$i}}" {{$publicacion->aniodepublicacion==$i ? 'selected' : ''}}>{{$i}}</option>
							@endfor
						</select>
						<label for="publicacion">EDITORIAL</label>
						<select name="ideditorial" class="custom-select" required>
							@foreach($editoriales as $editorial)
								<option value="{{$editorial->ideditorial}}" {{$editorial->ideditorial==$publicacion->ideditorial ? 'selected' : ''}}>{{$editorial->editorial}}</option>
							@endforeach
						</select>
						<label for="publicacion">TEMA PRINCIPAL</label>
						<select name="idtema" class="custom-select" required>
							@foreach($temas as $tema)
								<option value="{{$tema->idtema}}" {{$tema->idtema==$publicacion->idtema ? 'selected' : ''}}>{{$tema->tema}}</option>
							@endforeach
						</select>
						<label for="publicacion">IDIOMA</label>
						<select name="ididioma" class="custom-select" required>
							@foreach($idiomas as $idioma)
								<option value="{{$idioma->ididioma}}" {{$idioma->ididioma==$publicacion->ididioma ? 'selected' : ''}}>{{$idioma->idioma}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div>
					<br>
				</div>
				<button type="submit" onclick="return confirm('CONFIRME QUE DESEA GUARDAR LOS CAMBIOS PARA ESTE REGISTRO')" class="btn btn-info">GUARDAR CAMBIOS &nbsp<i class="fas fa-save"></i></button>&nbsp&nbsp&nbsp&nbsp
				<a href="{{ route('publicacion.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
			</form>	
		</div>
	</div>
@stop
