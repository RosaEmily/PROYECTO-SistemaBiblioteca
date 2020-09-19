@extends('dashboard')
@section('section')
<div class="row">
  <div class="col-12">
    <h3 class="crud-title">LISTADO DE AUTORES</h3>
    <div class="row">
      <div class="col" style="padding: 0px;">
        <a href="{{route('autor.create')}}" class="btn btn-info">NUEVO AUTOR &nbsp<i class="fas fa-plus-circle"></i></a>
      </div>
    </div>
    <div style="height: 20px;"></div>
    <div class="responsive-table">
      <table id="dataTable" class="table table-bordered table-hover nowrap" style="width:100%">
        <thead class="thead-dark">
          <th>ID</th>
          <th>NOMBRE</th>
          <th>NACIONALIDAD</th>
          <th>ACCIONES</th>
        </thead>
        <tbody>
            @foreach($autores as $autor)  
            <tr>
              <td>{{$autor->idautor}}</td>
              <td>{{$autor->autor}}</td>
              <td>{{$autor->nacionalidad}}</td>
              <td>
                <div style="display: flex;">
                  <a style="margin: 5px;" class="btn btn-outline-success" href="{{action('AutorController@show', $autor->idautor)}}"><i class="fa fa fa-eye" aria-hidden="true"></i></a>
                  <a style="margin: 5px;" class="btn btn-outline-primary" href="{{action('AutorController@edit', $autor->idautor)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                  <form action="{{action('AutorController@destroy', $autor->idautor)}}" method="post">
                    @csrf
                    <input name="_method" type="hidden" value="DELETE">
                    <button style="margin: 5px;" onclick="return confirm('CONFIRME QUE DESEA ELIMINAR ESTE REGISTRO')" class="btn btn-outline-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                  </form>   
                </div>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<script>
  $(function (){
      $('#dataTable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        "language": {
          "sProcessing":     "Procesando...",
          "sLengthMenu":     "Mostrar _MENU_ registros",
          "sZeroRecords":    "No se encontraron resultados",
          "sEmptyTable":     "Ningún dato disponible en esta tabla",
          "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
          "searchPlaceholder": "Buscar autor",
          "sSearch":         "Buscar:",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
              "sFirst":    "Primero",
              "sLast":     "Último",
              "sNext":     "Siguiente",
              "sPrevious": "Anterior"
          }
        }
      });
    });
</script>
@endsection
