@extends('dashboard')
@section('section')
	<div class="row">
		<div class="col-12">
			<h3 class="crud-title">ACTUALIZAR DATOS DEL PRÉSTAMO DE LA PUBLICACION"{{mb_strtoupper($prestamo->publicacion)}}"</h3>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<form method="POST" action="{{ route('prestamo.update',$prestamo->idprestamo) }}">
				@csrf
				<input name="_method" type="hidden" value="PATCH">
                <label for="prestamo">FECHA DE PRÉSTAMO</label>
                <input type="date" name="fechadeprestamo" class="form-control" value="{{ $prestamo->fechadeprestamo}}" required>
                <label for="prestamo">FECHA DE DEVOLUCIÓN</label>
                <input type="date" name="fechadedevolucion" class="form-control" value="{{ $prestamo->fechadedevolucion}}" required>
                <label for="prestamo">PRESTAMISTA</label>
                <select name="idprestamista" class="custom-select" required>
                    @foreach($prestamistas as $prestamista)
                        <option value="{{$prestamista->idprestamista}}" {{$prestamista->idprestamista==$prestamo->idprestamista ? 'selected' : ''}}>{{$prestamista->nombres}} {{$prestamista->apellidos}}</option>
                    @endforeach
                </select>
                <label for="prestamo">PUBLICACIÓN</label>
                <select name="idpublicacion" class="custom-select" required>
                    @foreach($publicaciones as $publicacion)
                        <option value="{{$publicacion->idpublicacion}}" {{$publicacion->idpublicacion==$prestamo->idpublicacion ? 'selected' : ''}}>{{$publicacion->publicacion}}</option>
                    @endforeach
                </select>
				<div>
					<br>
				</div>
				<button type="submit" onclick="return confirm('CONFIRME QUE DESEA GUARDAR LOS CAMBIOS PARA ESTE REGISTRO')" class="btn btn-info">GUARDAR CAMBIOS &nbsp<i class="fas fa-save"></i></button>&nbsp&nbsp&nbsp&nbsp
				<a href="{{ route('prestamo.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
			</form>	
		</div>
	</div>
@stop