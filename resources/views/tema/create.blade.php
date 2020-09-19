@extends('dashboard')
@section('section')
    <div class="row">
        <div class="col-12">
            <h3 class="crud-title">NUEVO TEMA</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('tema.store') }}" class="was-validated">
                @csrf
                <label for="tema">TEMA</label>
                <input type="text" name="tema" class="form-control" required>
                <div>
                    <br>
                </div>
                <button type="submit" class="btn btn-info">GUARDAR &nbsp<i class="fas fa-save"></i></button>&nbsp&nbsp&nbsp&nbsp
                <a href="{{ route('tema.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
            </form>		
        </div>
    </div>
@endsection