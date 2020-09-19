<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de prestamos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilospdf.css">
</head>
<body>
    <header>
        <div class="row">
            <div class="col" style="text-align: left">
                <img class="img_cabecera" src="img/login.png" alt="">
            </div>
            <div class="col" style="text-align: left">
                <div class="text_cabecera">
                    <span>SISTEMA DE BIBLIOTECA</span>
                    <br>
                    <span>"NOMBRE DE LA BIBLIOTECA"</span>
                    <br>
                    <span>Trujillo - Perú</span>
                </div>
            </div>
        </div>
    </header>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>FECHA DE PRESTAMO</th>
                <th>FECHA DE DEVOLUCIÓN</th>
                <th>PRESTAMISTA</th>
                <th>PUBLICACIÓN</th>               
            </tr>
        </thead>
        <tbody>
            @if($prestamos->count())
                @foreach($prestamos as $prestamo)
                <tr>
                    <td>
                        {{$prestamo->idprestamo}}
                    </td>
                    <td>
                        {{$prestamo->fechadeprestamo}}
                    </td>
                    <td>
                        {{$prestamo->fechadedevolucion}}
                    </td>
                    <td>
                        {{$prestamo->prestamista}}
                    </td>
                    <td>
                        {{$prestamo->publicacion}}
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>