@extends('dashboard')
@section('section')
    <div class="row">
        <div class="col-12">
            <h3 class="crud-title">NUEVA PUBLICACIÓN</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('publicacion.store') }}" class="was-validated">
                @csrf
                <div class="row">
					<div class="col" style="padding: 0px; padding-right:20px;">
                        <label for="publicacion">TÍTULO</label>
                        <input type="text" name="publicacion" class="form-control" required>
                        <label for="publicacion">EDICIÓN</label>
                        <input type="text" name="edicion" class="form-control" required>
                        <label for="publicacion">ISBN/ISSN</label>
                        <input type="text" name="ISBNISSN" class="form-control" required>
                        <label for="publicacion">TIPO</label>
                        <select name="tipo" class="custom-select" required>
                            <option value disabled selected> </option>
                            <option value="LIBRO">LIBRO</option>
                            <option value="REVISTA">REVISTA</option>
                        </select>
                        <label for="publicacion">AUTOR</label>
                        <select name="idautor" class="custom-select" required>
                            <option value disabled selected> </option>
                            @foreach($autores as $autor)
                                <option value="{{$autor->idautor}}">{{$autor->autor}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col" style="padding: 0px; padding-left:20px;">
                        <label for="publicacion">AÑO DE PUBLICACIÓN</label>
                        <select name="aniodepublicacion" class="custom-select" required>
                            <option value disabled selected> </option>
                            @for($i = date("Y"); $i >= 1950; $i--)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                        <label for="publicacion">EDITORIAL</label>
                        <select name="ideditorial" class="custom-select" required>
                            <option value disabled selected> </option>
                            @foreach($editoriales as $editorial)
                                <option value="{{$editorial->ideditorial}}">{{$editorial->editorial}}</option>
                            @endforeach
                        </select>
                        <label for="publicacion">TEMA PRINCIPAL</label>
                        <select name="idtema" class="custom-select" required>
                            <option value disabled selected> </option>
                            @foreach($temas as $tema)
                                <option value="{{$tema->idtema}}">{{$tema->tema}}</option>
                            @endforeach
                        </select>
                        <label for="publicacion">IDIOMA</label>
                        <select name="ididioma" class="custom-select" required>
                            <option value disabled selected> </option>
                            @foreach($idiomas as $idioma)
                                <option value="{{$idioma->ididioma}}">{{$idioma->idioma}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <br>
                </div>
                <button type="submit" class="btn btn-info">GUARDAR &nbsp<i class="fas fa-save"></i></button>&nbsp&nbsp&nbsp&nbsp
                <a href="{{ route('publicacion.index')}}" class="btn btn-info">VOLVER &nbsp<i class="fas fa-backward"></i></a>
            </form>		
        </div>
    </div>
@endsection
