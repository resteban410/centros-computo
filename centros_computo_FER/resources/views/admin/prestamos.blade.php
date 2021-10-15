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
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
        	locale: 'es',

	          headerToolbar: {
	            left: 'prev,next today',
	            center: 'title',
	            right: 'dayGridMonth,timeGridWeek,timeGridDay'

	        },

	        dateClick:function(info){
	          	$('#fecha').val(info.dateStr);

	          	$('#prestamo').modal('show');
	          },
        });
        calendar.render();
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


				<form action="" method="post">
					<div class="modal-body">       
					     @csrf
						<div class="form-group">
					        <label>Folio:</label>
					        <input type="text" name="num_horario" id="num_horario" class= "form-control"  readonly>
					    </div>
					   
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        				<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
	</div>
</div>
<!-- Termina modal -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    		<div id='calendar'></div> 
@endsection