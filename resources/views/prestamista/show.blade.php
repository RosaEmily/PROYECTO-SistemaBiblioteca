@extends('dashboard')
@section('section')
    <div class="row">
        <div class="col-12">
            <h3 class="crud-title">VER DATOS DE "{{mb_strtoupper($prestamista->nombres)}} {{mb_strtoupper($prestamista->apellidos)}}"</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form>
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <label for="prestamista">DNI</label>
                <input type="text" name="DNI" class="form-control" value="{{ $prestamista->DNI}}" disabled>
                <label for="prestamista">NOMBRES</label>
                <input type="text" name="nombres" class="form-control" value="{{ $prestamista->nombres}}" disabled>
                <label for="prestamista">APELLIDOS</label>
                <input type="text" name="apellidos" class="form-control" value="{{ $prestamista->apellidos}}" disabled>
                <label for="prestamista">TELÉFONO</label>
                <input type="text" name="telefono" class="form-control" value="{{ $prestamista->telefono}}" disabled>
                <label for="prestamista">DIRECCIÓN</label>
                <input type="text" name="direccion" class="form-control" value="{{ $prestamista->direccion}}" disabled>
            </form>		
        </div>
    </div>
    <div class="col volver">
        <br>
        <a href="{{ route('prestamista.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
    </div>
@endsection