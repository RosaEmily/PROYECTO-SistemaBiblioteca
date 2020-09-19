@extends('dashboard')
@section('section')
    <div class="row">
        <div class="col-12">
            <h3 class="crud-title">NUEVO PRÉSTAMO</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('prestamo.store') }}" class="was-validated">
                @csrf
                <label for="prestamo">FECHA DE PRÉSTAMO</label>
                <input type="date" name="fechadeprestamo" class="form-control" required>
                <label for="prestamo">FECHA DE DEVOLUCIÓN</label>
                <input type="date" name="fechadedevolucion" class="form-control" required>
                <label for="prestamo">PRESTAMISTA</label>
                <select name="idprestamista" class="custom-select" required>
                    <option value disabled selected> </option>
                    @foreach($prestamistas as $prestamista)
                        <option value="{{$prestamista->idprestamista}}">{{$prestamista->nombres}} {{$prestamista->apellidos}}</option>
                    @endforeach
                </select>
                <label for="prestamo">PUBLICACIÓN</label>
                <select name="idpublicacion" class="custom-select" required>
                    <option value disabled selected> </option>
                    @foreach($publicaciones as $publicacion)
                        <option value="{{$publicacion->idpublicacion}}">{{$publicacion->publicacion}}</option>
                    @endforeach
                </select>
                <div>
                    <br>
                </div>
                <button type="submit" class="btn btn-info">GUARDAR &nbsp<i class="fas fa-save"></i></button>&nbsp&nbsp&nbsp&nbsp
                <a href="{{ route('prestamo.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
            </form>		
        </div>
    </div>
@endsection