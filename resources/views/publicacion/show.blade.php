@extends('dashboard')
@section('section')
    <div class="row">
        <div class="col-12">
            <h3 class="crud-title">VER DATOS DE "{{mb_strtoupper($publicacion->publicacion)}}"</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form>
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="row">
                    <div class="col" style="padding: 0px; padding-right:20px;">
                        <label for="publicacion">TÍTULO</label>
                        <input type="text" name="publicacion" class="form-control" value="{{ $publicacion->publicacion}}" disabled>
                        <label for="publicacion">EDICIÓN</label>
                        <input type="text" name="edicion" class="form-control" value="{{ $publicacion->edicion}}" disabled>
                        <label for="publicacion">ISBN/ISSN</label>
                        <input type="text" name="ISBNISSN" class="form-control" value="{{ $publicacion->ISBNISSN}}" disabled>
                        <label for="publicacion">TIPO</label>
                        <input type="text" name="tipo" class="form-control" value="{{ $publicacion->tipo}}" disabled>
                        <label for="publicacion">AUTOR</label>
                        <input type="text" name="autor" class="form-control" value="{{ $publicacion->autor}}" disabled>
                    </div>
                    <div class="col" style="padding: 0px; padding-left:20px;">
                        <label for="publicacion">AÑO DE PUBLICACIÓN</label>
                        <input type="text" name="aniodepublicacion" class="form-control" value="{{ $publicacion->aniodepublicacion}}" disabled>
                        <label for="publicacion">EDITORIAL</label>
                        <input type="text" name="editorial" class="form-control" value="{{ $publicacion->editorial}}" disabled>
                        <label for="publicacion">TEMA PRINCIPAL</label>
                        <input type="text" name="tema" class="form-control" value="{{ $publicacion->tema}}" disabled>
                        <label for="publicacion">IDIOMA</label>
                        <input type="text" name="idioma" class="form-control" value="{{ $publicacion->idioma}}" disabled>
                    </div>
                </div>

            </form>	
        </div>
    </div>
    <div class="col volver">
        <br>
        <a href="{{ route('publicacion.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
    </div>
@stop