<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Sistema de control de inventario</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="/plugins/fullcalendar/main.min.css">
		<link rel="stylesheet" href="/plugins/fullcalendar-daygrid/main.min.css">
		<link rel="stylesheet" href="/plugins/fullcalendar-timegrid/main.min.css">
		<link rel="stylesheet" href="/plugins/fullcalendar-bootstrap/main.min.css">
		
		<link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
		<link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
		<link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
		<link rel="stylesheet" href="/css/adminlte.min.css">
		<link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
		<link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
		<link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.css"/>
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('css/estilos.css')}}">
		<script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
		
	</head>
	<body style="z-index: 0;">
		@yield('content')
		<script src="https://kit.fontawesome.com/8aa296ee95.js" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
		<script src="{{asset('plugins/fullcalendar/main.min.js')}}"></script>
		<script src="{{asset('plugins/fullcalendar-daygrid/main.min.js')}}"></script>
		<script src="{{asset('plugins/fullcalendar-timegrid/main.min.js')}}"></script>
		<script src="{{asset('plugins/fullcalendar-interaction/main.min.js')}}"></script>
		<script src="{{asset('plugins/fullcalendar-bootstrap/main.min.js')}}"></script>
		<script src="{{asset('plugins/fullcalendar/locales/es.js')}}"></script>
		<script src="{{asset('js/adminlte.js')}}"></script>
		<script src="{{asset('js/demo.js')}}"></script>
		<script src="/plugins/datatables/jquery.dataTables.js"></script>
		<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
		<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.js"></script>
	</body>
</html>
