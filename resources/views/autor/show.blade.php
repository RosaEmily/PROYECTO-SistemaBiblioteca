@extends('dashboard')
@section('section')
    <div class="row">
        <div class="col-12">
            <h3 class="crud-title">VER DATOS DE "{{mb_strtoupper($autor->autor)}}"</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form>
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <label for="autor">NOMBRE</label>
                <input type="text" name="autor" class="form-control" value="{{ $autor->autor}}" disabled>
                <label for="autor">EMAIL</label>
                <input type="text" name="email" class="form-control" value="{{ $autor->email}}" disabled>
                <label for="autor">NACIONALIDAD</label>
                <input type="text" name="nacionalidad" class="form-control" value="{{ $autor->nacionalidad}}" disabled>
            </form>	
        </div>
    </div>
    <div class="col volver">
        <br>
        <a href="{{ route('autor.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
    </div>
@stop