@extends('dashboard')
@section('section')
    <div class="row">
        <div class="col-12">
            <h3 class="crud-title">NUEVA EDITORIAL</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('editorial.store') }}" class="was-validated">
                @csrf
                <label for="editorial">NOMBRE</label>
                <input type="text" name="editorial" class="form-control" required>
                <label for="editorial">TELÉFONO</label>
                <input type="text" name="telefono" class="form-control" required>
                <label for="editorial">EMAIL</label>
                <input type="email" name="email" class="form-control" required>
                <label for="editorial">DIRECCIÓN</label>
                <input type="text" name="direccion" class="form-control" required>
                <div>
                    <br>
                </div>
                <button type="submit" class="btn btn-info">GUARDAR &nbsp<i class="fas fa-save"></i></button>&nbsp&nbsp&nbsp&nbsp
                <a href="{{ route('editorial.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
            </form>		
        </div>
    </div>
@endsection