@extends('layouts.plantillabase')

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
			events: "prestamos/show",
			
			dateClick:function(info){
				formulario[1].reset();
				$('#start').val(info.dateStr);
				$('#end').val(info.dateStr);
				$('#prestamo').modal('show');

			},
			eventClick:function(info){
				var evento= info.event;
				$id = info.event.extendedProps.num_prestamo;
				axios.post("editar_prestamo/" + $id).
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
			enviarDatos("alta_prestamo");
		});

		document.getElementById("btnEliminar").addEventListener("click", function(){
			
			enviarDatos("borrar_prestamo/" + formulario[1].num_prestamo.value);
		});

		document.getElementById("btnEditar").addEventListener("click", function(){
			
			enviarDatos("actualizar_prestamo");
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
				<label><b>Fecha/Hora de prestamo:</b> aaaa-mm-dd hh:mm</label>
				<input type="text" name="start" id="start" class= "form-control" required="">   
			</div>
			<div class="form-group">
			<label><b>Fecha/Hora de termino:</b> aaaa-mm-dd hh:mm</label>
				<label>Si el evento termina el mismo día, colocar la fecha de prestamo.</label>
				<input type="text" name="end" id="end" class= "form-control" required="">
			</div>
			<div class="form-group">
				<label for="title"><b>Titulo del evento:</b></label>
				<input type="text" name="title" id="title" class="form-control" required="">
			</div>
			<div class="form-group">
				<label for="descripcion"><b>Descripción:</b></label>
				<input type="text" name="descripcion" id="descripcion" class="form-control" required="">
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