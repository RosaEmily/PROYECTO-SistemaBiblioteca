@extends('dashboard')
@section('section')
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart1);

      function drawChart1() {
        var data = google.visualization.arrayToDataTable([
          ['Publicacion', 'Número de Préstamos'],
          @foreach($registrospublic as $reg)
              ['{{$reg->publicacion}}',{{$reg->cantidad}}],  
          @endforeach          
        ]);

        var view = new google.visualization.DataView(data);

        var options = {
          title: 'NÚMERO DE PRÉSTAMOS POR PUBLICACIÓN'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(view, options);
      }
      
      $(window).resize(function(){
        drawChart1();
      })

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);

      function drawChart2() {
        var data = google.visualization.arrayToDataTable([
          ['Prestamista', 'Número de Préstamos'],
          @foreach($registrospresta as $reg)
              ['{{$reg->prestamista}}',{{$reg->cantidad}}],  
          @endforeach          
        ]);

        var view = new google.visualization.DataView(data);

        var options = {
          title: 'NÚMERO DE PRÉSTAMOS POR PRESTAMISTA'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(view, options);
      }
      
      $(window).resize(function(){
        drawChart2();
      })
    </script>
  </head>
  <body>
    <h3 class="crud-title">REPORTES GRÁFICOS</h3>
    <div class="row" style="margin: 0px;">
      <div id="piechart1" style="height: 500px; width: 100%"></div>
      <div id="piechart2" style="height: 500px; width: 100%"></div>
    </div>
  </body>
</html>
@stop