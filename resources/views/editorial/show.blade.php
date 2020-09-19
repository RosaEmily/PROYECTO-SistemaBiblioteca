@extends('dashboard')
@section('section')
    <div class="row">
        <div class="col-12">
            <h3 class="crud-title">VER DATOS DE "{{mb_strtoupper($editorial->editorial)}}"</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form>
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <label for="autor">NOMBRE</label>
                <input type="text" name="editorial" class="form-control" value="{{ $editorial->editorial}}" disabled>
                <label for="autor">TELÉFONO</label>
                <input type="text" name="telefono" class="form-control" value="{{ $editorial->telefono}}" disabled>
                <label for="autor">EMAIL</label>
                <input type="text" name="email" class="form-control" value="{{ $editorial->email}}" disabled>
                <label for="autor">DIRECCIÓN</label>
                <input type="text" name="direccion" class="form-control" value="{{ $editorial->direccion}}" disabled>
            </form>	
        </div>
    </div>
    <div class="col volver">
        <br>
        <a href="{{ route('editorial.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
    </div>
@stop