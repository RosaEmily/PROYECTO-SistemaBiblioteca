@extends('dashboard')
@section('section')
    <div class="row">
        <div class="col-12">
            <h3 class="crud-title">NUEVO PRESTAMISTA</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('prestamista.store') }}" class="was-validated">
                @csrf
                <label for="prestamista">DNI</label>
                <input type="text" name="DNI" class="form-control" required>
                <label for="prestamista">NOMBRES</label>
                <input type="text" name="nombres" class="form-control" required>
                <label for="prestamista">APELLIDOS</label>
                <input type="text" name="apellidos" class="form-control" required>
                <label for="prestamista">TELÉFONO</label>
                <input type="text" name="telefono" class="form-control" required>
                <label for="prestamista">DIRECCIÓN</label>
                <input type="text" name="direccion" class="form-control" required>
                <div>
                    <br>
                </div>
                <button type="submit" class="btn btn-info">GUARDAR &nbsp<i class="fas fa-save"></i></button>&nbsp&nbsp&nbsp&nbsp
                <a href="{{ route('prestamista.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
            </form>		
        </div>
    </div>
@endsection