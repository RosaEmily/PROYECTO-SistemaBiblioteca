@extends('dashboard')
@section('section')
    <div class="row">
        <div class="col-12">
            <h3 class="crud-title">VER DATOS DEL PRÉSTAMO DE LA PUBLICACION"{{mb_strtoupper($prestamo->publicacion)}}"</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form>
                @csrf
                <label for="prestamo">FECHA DE PRÉSTAMO</label>
                <input type="date" name="fechadeprestamo" class="form-control" value="{{ $prestamo->fechadeprestamo}}" disabled>
                <label for="prestamo">FECHA DE DEVOLUCIÓN</label>
                <input type="date" name="fechadedevolucion" class="form-control" value="{{ $prestamo->fechadedevolucion}}" disabled>
                <label for="prestamo">PRESTAMISTA</label>
                <input type="text" name="idprestamista" class="form-control" value="{{ $prestamo->prestamista}}" disabled>
                <label for="prestamo">PUBLICACIÓN</label>
                <input type="text" name="idpublicacion" class="form-control" value="{{ $prestamo->publicacion}}" disabled>
                <div>
                    <br>
                </div>
            </form>		
        </div>
    </div>
    <div class="col volver">
        <br>
        <a href="{{ route('prestamo.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
    </div>
@endsection