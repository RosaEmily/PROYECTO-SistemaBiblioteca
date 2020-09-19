@extends('dashboard')
@section('section')
    <div class="row">
        <div class="col-12">
            <h3 class="crud-title">NUEVO AUTOR</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('autor.store') }}" class="was-validated">
                @csrf
                <label for="autor">NOMBRE</label>
                <input type="text" name="autor" class="form-control" required>
                <label for="autor">EMAIL</label>
                <input type="email" name="email" class="form-control" required>
                <label for="autor">NACIONALIDAD</label>
                <input type="text" name="nacionalidad" class="form-control" required>
                <div>
                    <br>
                </div>
                <button type="submit" class="btn btn-info">GUARDAR &nbsp<i class="fas fa-save"></i></button>&nbsp&nbsp&nbsp&nbsp
                <a href="{{ route('autor.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
            </form>		
        </div>
    </div>
@endsection