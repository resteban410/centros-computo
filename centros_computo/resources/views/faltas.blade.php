@extends('layouts.plantillabase')
@section('contenido')
<br></br>

<!-- Modal Crear nuevo alumno-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo registros</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('altaFalta')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>Folio:</label>
                    <input type="text" name="clave" id="clave" class= "form-control" placeholder="Asignado automaticamente" readonly>
            </div>

      		<div class="form-group">
      			<label>Fecha Perdida:</label>
      			<input type="date" name="fecha_perdida" id="fecha_perdida" class= "form-control">
                {!! $errors->first('fecha_perdida', '<small>:message</small><br>') !!}
      		</div>

            <div class="form-group">
      			<label>Hora Perdida:</label>
      			<input type="time" name="hora_perdida" id="hora_perdida" class= "form-control">
                {!! $errors->first('hora_perdida', '<small>:message</small><br>') !!}
      		</div>

			    <label>Observaciones:</label>
            <div class="form-group">                
                    <textarea name="observaciones" id="observaciones" rows="5" cols="40"></textarea>
                    {!! $errors->first('observaciones', '<small>:message</small><br>') !!}
            </div>

            <label>Equipo:</label>
            <div class="form-group">
                
                       <select name="equipo_no_serie">
                       	@foreach($equipos as $item)
                       	  <option value="{{$item->no_serie}}">{{$item->no_serie}}
                       	  </option>
                       	@endforeach 
                        </select>   
                        {!! $errors->first('equipo_no_serie', '<small>:message</small><br>') !!}                   
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
<!-- Termina modal de nuevo alumno -->

<!-- Empieza modal de editar alumno -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Editar registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('editarFalta')}}" method="post" id="editForm">
      <div class="modal-body">       
                @csrf
                @method('PUT')
            <div class="form-group">
                <label>Folio:</label>
                    <input type="text" name="clave" id="clave" class= "form-control" placeholder="Asignado automaticamente" readonly>
            </div>

      		<div class="form-group">
      			<label>Fecha Perdida:</label>
      			<input type="date" name="fecha_perdida" id="fecha_perdida" class= "form-control">
                {!! $errors->first('fecha_perdida', '<small>:message</small><br>') !!}
      		</div>

            <div class="form-group">
      			<label>Hora Perdida:</label>
      			<input type="time" name="hora_perdida" id="hora_perdida" class= "form-control">
                {!! $errors->first('hora_perdida', '<small>:message</small><br>') !!}
      		</div>

			    <label>Observaciones:</label>
            <div class="form-group">                
                    <textarea name="observaciones" id="observaciones" rows="5" cols="40"></textarea>
                    {!! $errors->first('observaciones', '<small>:message</small><br>') !!}
            </div>

            <label>Equipo:</label>
            <div class="form-group">
                
                       <select name="equipo_no_serie">
                       	@foreach($equipos as $item)
                       	  <option value="{{$item->no_serie}}">{{$item->no_serie}}
                       	  </option>
                       	@endforeach 
                        </select>   
                        {!! $errors->first('equipo_no_serie', '<small>:message</small><br>') !!}                   
            </div>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!--Termina modal de editar alumno-->

<!-- Empieza modal de eliminar alumno -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('borrarFalta')}}" method="POST" id="deleteForm">
      @csrf
      @method('DELETE')
      <div class="modal-body">       
            <input type="hidden" name="_method" value="DELETE">
        <p>¿Estas seguro de borrar este registro? Esta acción no puede revertirse. Para asegurarse, vuelva a escribir el número de folio del registro seleccionado. </p>

            <div class="form-group">
                <label>Folio:</label>
                    <input type="text" name="clave" id="clave" class= "form-control" placeholder="Escriba el numero de folio">
                    {!! $errors->first('clave', '<small>:message</small><br>') !!}  
            </div>      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Borrar registro</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!--Termina modal de eliminar alumno-->

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

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar nuevo registro
    </button>
</div>

<br></br>
<div class="card"> 
        <div class="card-body">
        <h4> Historial de Faltas</h4>
        <table id="faltas" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Folio</th>
                <th>Fecha Perdida</th>
                <th>Hora Perdida</th>
                <th>Observaciones</th>
                <th>No.Serie Equipo</th>
                <th>Acciones</th>
            </tr>   
            </thead> 
            <tbody>
                @foreach($faltas as $falta)
                <tr>
                    <td>{{$falta->clave}}</td>
                    <td>{{$falta->fecha_perdida}}</td>
                    <td>{{$falta->hora_perdida}}</td>
                    <td>{{$falta->observaciones}}</td>
					<td>{{$falta->equipo_noserie}}</td>
                    <td>
                        <a href="#" class="btn btn-success edit">Editar</a>
                        <a href="#" class="btn btn-danger delete">Borrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection

@section('editarborrar')
<script type="text/javascript">
            $(document).ready(function() {

                var table= $('#faltas').DataTable({
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
                    //start edit record 
                    table.on('click', '.edit', function(){

                        $tr = $(this).closest('tr');
                        if ($($tr).hasClass('child')){
                            $tr =  $tr.prev('.parent');
                        }
                        var data = table.row($tr).data();
                        console.log(data);

                        $('#clave').val(data[0]);
                        $('#fecha_perdida').val(data[1]);
                        $('#hora_perdida').val(data[2]);
                        $('#observaciones').val(data[3]);
                        $('#equipo_noserie').val(data[4]);

                 
                        $('#editForm').attr('route', 'editarFalta', + data[0]);
                        $('#editModal').modal('show');
                    });

                    //end edit record 

                    //star delete record 
                    table.on('click', '.delete', function(){

                        $tr = $(this).closest('tr');
                        if ($($tr).hasClass('child')){
                            $tr =  $tr.prev('.parent');
                        }
                        var data = table.row($tr).data();
                        console.log(data);

                        $('#clave').val(data[0]);

                        $('#deleteForm').attr('route', 'borrarFalta', + data[0]);
                        $('#deleteModal').modal('show');
                    });
                    //end delete record 
                });
        </script>
@endsection