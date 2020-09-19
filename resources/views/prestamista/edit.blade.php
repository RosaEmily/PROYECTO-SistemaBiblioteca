@extends('dashboard')
@section('section')
    <div class="row">
        <div class="col-12">
            <h3 class="crud-title">ACTUALIZAR DATOS DE "{{mb_strtoupper($prestamista->nombres)}} {{mb_strtoupper($prestamista->apellidos)}}"</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('prestamista.update',$prestamista->idprestamista) }}" class="was-validated">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <label for="prestamista">DNI</label>
                <input type="text" name="DNI" class="form-control" value="{{ $prestamista->DNI}}" required="">
                <label for="prestamista">NOMBRES</label>
                <input type="text" name="nombres" class="form-control" value="{{ $prestamista->nombres}}" required="">
                <label for="prestamista">APELLIDOS</label>
                <input type="text" name="apellidos" class="form-control" value="{{ $prestamista->apellidos}}" required="">
                <label for="prestamista">TELÉFONO</label>
                <input type="text" name="telefono" class="form-control" value="{{ $prestamista->telefono}}" required="">
                <label for="prestamista">DIRECCIÓN</label>
                <input type="text" name="direccion" class="form-control" value="{{ $prestamista->direccion}}" required="">
                <div>
                    <br>
                </div>
                <button type="submit" onclick="return confirm('CONFIRME QUE DESEA GUARDAR LOS CAMBIOS PARA ESTE REGISTRO')" class="btn btn-info">GUARDAR CAMBIOS &nbsp<i class="fas fa-save"></i></button>&nbsp&nbsp&nbsp&nbsp
				<a href="{{ route('prestamista.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
            </form>		
        </div>
    </div>
@endsection