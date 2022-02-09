@extends('layouts.plantillabase2')
@section('calendario')
	<style>
	      html, body{
	        margin: 0; padding: 0;
	        font-family: Arial, Helvetica, sans-serif;
	        font-size: 14px;   
	      }
	      #calendar{ max-width: 900px; margin: 40px auto; }

	</style>


	<script>
	 document.addEventListener('DOMContentLoaded', function() {
		let formulario = document.getElementsByTagName("form");
		var calendarEl = document.getElementById('calendar');
		var calendar = new FullCalendar.Calendar(calendarEl, {
			locale: 'es',
				headerToolbar: {
				left: 'prev,next today',
				center: 'title',
				right: 'dayGridMonth,timeGridWeek,timeGridDay'
			},
			events: "prestamos/showw",
			
			dateClick:function(info){
				formulario[1].reset();
				$('#start').val(info.dateStr);
				$('#end').val(info.dateStr);
				$('#prestamo').modal('show');

			},
			eventClick:function(info){
				var evento= info.event;
				$id = info.event.extendedProps.num_prestamo;
				axios.post("editar_prestamos/" + $id).
				then(
					(respuesta) =>{
						$('#num_prestamo').val(respuesta.data[0].num_prestamo);
						$('#start').val(respuesta.data[0].start);
						$('#end').val(respuesta.data[0].end);
						$('#title').val(respuesta.data[0].title);
						$('#descripcion').val(respuesta.data[0].descripcion);
						$('#usuario_usu_id').val(respuesta.data[0].usuario_usu_id);
						$('#labora_lab_clave').val(respuesta.data[0].labora_lab_clave);
						$('#prestamo').modal('show');
					}
					).catch(
						error=>{
							if(error.response){
								console.log(error.response.data)
							}
						}
				)	
			},
		});
		calendar.render();
		document.getElementById("btnGuardar").addEventListener("click", function(){		
			enviarDatos("alta_prestamos");
		});

		document.getElementById("btnEliminar").addEventListener("click", function(){
			
			enviarDatos("borrar_prestamos/" + formulario[1].num_prestamo.value);
		});

		document.getElementById("btnEditar").addEventListener("click", function(){
			
			enviarDatos("actualizar_prestamos");
		});

		function enviarDatos(url){
			const datos= new FormData(formulario[1]);
			axios.post(url, datos).
				then(
					(respuesta) =>{
						calendar.refetchEvents();
						$('#prestamo').modal('hide');
					}
					).catch(
						error=>{
							if(error.response){
								console.log(error.response.data)
							}
						}
				)	
		}

	 });
    </script>
@endsection

@section('contenido')

<br></br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#asignacion">Consulta los horarios</button>

<div class="modal fade" id="prestamo" tabindex="-1" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Nuevo registro</h5>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form action="">
					@csrf
			<div class="form-group">
				<label><b>Folio:</b> Asignado automaticamente</label>
				<input type="text" name="num_prestamo" id="num_prestamo" class= "form-control" readonly>
			</div>
			<div class="form-group">
				<label><b>Fecha/Hora de préstamo:</b> aaaa-mm-dd hh:mm</label>
				<input type="text" name="start" id="start" class= "form-control">   
			</div>
			<div class="form-group">
			<label><b>Fecha/Hora de termino:</b> aaaa-mm-dd hh:mm</label>
				<label>Si el evento termina el mismo día, colocar la fecha de préstamo.</label>
				<input type="text" name="end" id="end" class= "form-control">
			</div>
			<div class="form-group">
				<label for="title"><b>Titulo del evento:</b></label>
				<input type="text" name="title" id="title" class="form-control">
			</div>
			<div class="form-group">
				<label for="descripcion"><b>Descripción:</b></label>
				<input type="text" name="descripcion" id="descripcion" class="form-control">
			</div>
			<div class="form-group">
				<label>Usuario:</label>
				<select name="usuario_usu_id">
					@foreach($usuarios as $item)
					<option value="{{$item->id}}">{{$item->name}} - {{$item->last_name}}
					</option>
					@endforeach 
				</select>  
				{!! $errors->first('usuario_usu_id', '<small>:message</small><br>') !!}                    
				<label>Laboratorio:</label>
				<select name="labora_lab_clave">
					@foreach($laboratorios as $item)
					<option value="{{$item->lab_clave}}">{{$item->nombre_laboratorio}}
					</option>
					@endforeach 
				</select>
				{!! $errors->first('labora_lab_clave', '<small>:message</small><br>') !!}
			</div>									
			</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
				<button type="button" class="btn btn-warning" id="btnEditar">Modificar</button>
				<button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="asignacion" tabindex="-1" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" style="max-width:60%;" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Horarios</h5>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="card"> 
                <div class="card-body">
                    <table id="asignaciones" class="table table-striped table-bordered" style="max-width:60%;">
                        <thead>
                            <tr>
                                <th>Periodo</th>
                                <th>Fecha</th>
                                <th>Horario</th>
                                <th>Usuario</th>
                                <th>Laboratorio</th>
                            </tr>   
                        </thead> 
                        <tbody>
                            @foreach($data as $dat)
                            <tr>
                                <td>{{$dat->nombre_periodo}}</td>
                                <td>{{$dat->fecha}}</td>
                                <td>{{$dat->hora_inicio}}hrs - {{$dat->hora_termino}}hrs</td>
                                <td>{{$dat->name}}</td>
                                <td>{{$dat->nombre_laboratorio}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>periodo</th>
                                <th>fecha</th>
                                <th>horario</th>
                                <th>usuario</th>
                                <th>laboratorio</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
			</div>
		</div>
	</div>
</div>
        	
<div class="container">
	@if(count($errors) > 0)
	<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)
	<li>
		{{$error}}
	</li>
	@endforeach
	</ul>
	</div>
	@endif
	@if(\Session::has('sucess'))
		<div class="alert alert-success">
			<p>{{\Session::get('sucess')}}</p>
		</div>
	@endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    		<div id='calendar'></div> 
@endsection
@section('editarborrar')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#asignaciones tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );
            });

            var table= $('#asignaciones').DataTable({
                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;
            
                        $( 'input', this.footer() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                },
                responsive: true,
                autoWidth: false,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "Nada encontrado - disculpa",
                    "info": "Mostrando la página _PAGE_ de _PAGES_",
                    "infoEmpty": "Registros no disponibles",
                    "infoFiltered": "(flitrado de _MAX_ registros totales)",
                    "search": "Buscar",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                }}
            });
        });
    </script>
@endsection

