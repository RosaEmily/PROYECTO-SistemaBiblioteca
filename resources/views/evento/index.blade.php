@extends('dashboard')
@section('section')
    <div class="row">
        <div class="col">
            <div class="card card-primary">
                <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>    
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">NUEVO EVENTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="libro">FECHA</label>
                <input type="text" name="fechan" id="fechan" class="form-control" required disabled>
                <label for="libro">TÍTULO</label>
                <input type="text" name="titulon" id="titulon" class="form-control" required>
                <label for="libro">HORA</label>
                <input type="time" name="horan" id="horan" class="form-control" required>
                <label for="libro">DESCRIPCIÓN</label>
                <textarea type="text" name="descripcionn" id="descripcionn" rows="3" class="form-control" required></textarea>
                <label for="libro">COLOR</label>
                <input type="color" name="colorn" id="colorn" class="form-control" required>
            </div>
            <div class="modal-footer">
                <button id="btnAgregar" class="btn btn-success">GUARDAR</button>
            </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">DATOS DE EVENTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="libro">FECHA</label>
                <input type="text" name="fecha" id="fecha" class="form-control" required disabled>
                <label for="libro">TÍTULO</label>
                <input type="text" name="titulo" id="titulo" class="form-control" required disabled>
                <label for="libro">HORA</label>
                <input type="time" name="hora" id="hora" class="form-control" required disabled>
                <label for="libro">DESCRIPCIÓN</label>
                <textarea type="text" name="descripcion" id="descripcion" rows="3" class="form-control" required disabled></textarea>
                <label for="libro">COLOR</label>
                <input type="color" name="color" id="color" class="form-control" required disabled>
            </div>
            <div class="modal-footer">
                <button id="btnModificar" class="btn btn-secondary">EDITAR</button>
                <button id="btnEliminar" class="btn btn-danger">ELIMINAR</button>
            </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {

            /* initialize the external events
            -----------------------------------------------------------------*/
            function ini_events(ele){
                ele.each(function (){

                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                    }

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject)

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                    zIndex        : 1070,
                    revert        : true, // will cause the event to go back to its
                    revertDuration: 0  //  original position after the drag
                    })

                })
            }

            ini_events($('#external-events div.external-event'))

            /* initialize the calendar
            -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d    = date.getDate(),
                m    = date.getMonth(),
                y    = date.getFullYear()

            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendarInteraction.Draggable;

            var containerEl = document.getElementById('external-events');
            var checkbox = document.getElementById('drop-remove');
            var calendarEl = document.getElementById('calendar');

            var calendar = new Calendar(calendarEl,{
                plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
                header    : {
                    left  : 'prev,next today',
                    center: 'title',
                    right : 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            'themeSystem': 'bootstrap',

            dateClick:function(info){
                $('#fechan').val(info.dateStr);
                $('#titulon').val("");
                $('#horan').val("");
                $('#descripcionn').val("");
                $('#colorn').val("");
                $('#exampleModal').modal();
            },

            eventClick:function(info){
                console.log(info);
                console.log(info.event.title);
                console.log(info.event.start);
                console.log(info.event.end);
                console.log(info.event.textColor);
                console.log(info.event.backgroundColor);

                console.log(info.event.extendedProps.descripcion);

                mes = (info.event.start.getMonth()+1);
                dia = (info.event.start.getDate());
                anio = (info.event.start.getFullYear());
                hora = (info.event.start.getHours());
                minutos = (info.event.start.getMinutes())

                mes=(mes<10)?"0"+mes:mes;
                dia=(dia<10)?"0"+dia:dia;
                hora=(hora<10)?"0"+hora:hora;
                minutos=(minutos<10)?"0"+minutos:minutos;

                idevento=info.event.id;

                $('#fecha').val(anio+"-"+mes+"-"+dia);
                $('#titulo').val(info.event.title);
                $('#hora').val(hora+":"+minutos);
                $('#descripcion').val(info.event.extendedProps.descripcion);
                $('#color').val(info.event.backgroundColor);
                $('#exampleModal2').modal();
            },

            events:"{{url('/evento/show')}}",

            locale: 'es',
            editable  : true,
            droppable : true, // this allows things to be dropped onto the calendar !!!
            drop      : function(info) {
                // is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
                // if so, remove the element from the "Draggable Events" list
                info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            }    
            });
            
            calendar.render();
            // $('#calendar').fullCalendar()

            $('#btnAgregar').click(function(){
                ObjEvento=recolectarDatosGUI("POST");
                EnviarInformacion('',ObjEvento);
            });

            $('#btnEliminar').click(function(){
                ObjEvento=recolectarDatosGUI("DELETE");
                EnviarInformacion('/'+idevento,ObjEvento);
            });

            function recolectarDatosGUI(method){
                nuevoEvento={
                    title:$("#titulon").val(),
                    descripcion:$("#descripcionn").val(),
                    color:$("#colorn").val(),
                    textColor:"#FFFFFF",
                    start:$("#fechan").val()+" "+$("#horan").val(),
                    end:$("#fechan").val()+" "+$("#horan").val(),
                    '_token':$("input[name='_token']").attr("value"),
                    '_method':method
                }
                return(nuevoEvento);
            }

            function EnviarInformacion(accion,objEvento){
                $.ajax({
                    type:"POST",
                    url:"{{url('/evento')}}"+accion,
                    data:objEvento,
                    success:function(msg)
                    {
                        console.log(msg);
                        $('#exampleModal').modal('hide');
                        $('#exampleModal2').modal('hide');
                        calendar.refetchEvents();
                    },
                    error:function(){alert("Hay un error");}
                });
            }
        })
    </script>
@endsection