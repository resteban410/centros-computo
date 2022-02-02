@extends('layouts.plantillabase')
@section('contenido')

<br> </br>
<!-- Modal Crear nuevo alumno-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('altaAuto')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>Folio:</label>
                    <input type="text" name="folio" class= "form-control" placeholder="Asignado automaticamente" readonly>
            </div>

            <div class="form-group">
                <label>Hora de inicio:</label>
                    <input type="time" name="hora_inicio" class= "form-control" required="">
                    {!! $errors->first('hora_inicio', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Hora de termino:</label>
                    <input type="time" name="hora_termino" class= "form-control" required="">
                    {!! $errors->first('hora_termino', '<small>:message</small><br>') !!}
            </div>

		      	<div class="form-group">
                <label>Fecha:</label>
                    <input type="date" name="fecha" id="fecha" class= "form-control" required="">
                    {!! $errors->first('fecha', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Actividad:</label>
                    <input type="text" name="actividad" class= "form-control" placeholder="Describa la actividad a realizar" required="">
                    {!! $errors->first('actividad', '<small>:message</small><br>') !!}
            </div>


            <label>Equipo:</label>
            <div class="form-group">
                
                       <select name="equipo_noserie">
                       	@foreach($equipos as $item)
                       	  <option value="{{$item->no_serie}}">{{$item->no_serie}}
                       	  </option>
                       	@endforeach 
                        </select>
                        {!! $errors->first('equipo_noserie', '<small>:message</small><br>') !!}                      
            </div>
            <label>Usuario:</label>
            <div class="form-group">
                
                       <select name="usuario_id">
                       	@foreach($usuarios as $item)
                       	  <option value="{{$item->id}}">{{$item->name}} - {{$item->last_name}}
                       	  </option>
                       	@endforeach 
                        </select>  
                        {!! $errors->first('usuario_id', '<small>:message</small><br>') !!}                    
            </div>
            <label>Alumno:</label>
            <div class="form-group">
                
                       <select name="matricula_alumno">
                       	@foreach($alumnos as $item)
                       	  <option value="{{$item->matricula}}">{{$item->nombre, $item->apellido}}
                       	  </option>
                       	@endforeach 
                        </select>  
                        {!! $errors->first('matricula_alumno', '<small>:message</small><br>') !!}                    
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
    <form action="{{route('editarAuto')}}" method="post" id="editForm">
      <div class="modal-body">       
                @csrf
                @method('PUT')
            <div class="form-group">
                <label>Folio:</label>
                    <input type="text" name="folio" id="folio" class= "form-control" placeholder="Escriba el número de folio" readonly>
            </div>

            <div class="form-group">
                <label>Hora de inicio:</label>
                    <input type="time" name="hora_inicio" id="hora_inicio" class= "form-control" required="">
                    {!! $errors->first('hora_inicio', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Hora de termino:</label>
                    <input type="time" name="hora_termino" id="hora_termino" class= "form-control" required="">
                    {!! $errors->first('hora_termino', '<small>:message</small><br>') !!}
            </div>

			     <div class="form-group">
                <label>Fecha:</label>
                    <input type="date" name="fecha" id="fecha" class= "form-control" required="">
                    {!! $errors->first('fecha', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Actividad:</label>
                    <input type="text" name="actividad" id="actividad" class= "form-control" placeholder="Describa la actividad a realizar" required="">
                    {!! $errors->first('actividad', '<small>:message</small><br>') !!}
            </div>


            <label>Equipo:</label>
            <div class="form-group">
                
                       <select name="equipo_noserie">
                       	@foreach($equipos as $item)
                       	  <option value="{{$item->no_serie}}">{{$item->no_serie}}
                       	  </option>
                       	@endforeach 
                        </select>  
                        {!! $errors->first('equipo_noserie', '<small>:message</small><br>') !!}                    
            </div>

            <label>Usuario:</label>
            <div class="form-group">
                
                       <select name="usuario_id">
                       	@foreach($usuarios as $item)
                       	  <option value="{{$item->id}}">{{$item->name}} - {{$item->last_name}}
                       	  </option>
                       	@endforeach 
                        </select>
                        {!! $errors->first('usuario_id', '<small>:message</small><br>') !!}                      
            </div>
            <label>Alumno:</label>
            <div class="form-group">
                
                       <select name="matricula_alumno">
                       	@foreach($alumnos as $item)
                       	  <option value="{{$item->matricula}}">{{$item->nombre, $item->apellido}}
                       	  </option>
                       	@endforeach 
                        </select>
                        {!! $errors->first('matricula_alumno', '<small>:message</small><br>') !!}                      
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
    <form action="{{route('borrarAuto')}}" method="POST" id="deleteForm">
      @csrf
      @method('DELETE')
      <div class="modal-body">       
            <input type="hidden" name="_method" value="DELETE">
        <p>¿Estas seguro de borrar este registro? Esta acción no puede revertirse. Para asegurarse, vuelva a escribir el número de folio del registro seleccionado. </p>

            <div class="form-group">
                <label>Folio:</label>
                    <input type="text" name="folio" id="folio" class= "form-control" placeholder="Escriba el número de folio" required="">
                    {!! $errors->first('folio', '<small>:message</small><br>') !!}
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
        <h4> Historial de autoacceso</h4>
        <table id="autoaccesos" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Folio</th>
                <th>Hora Inicio</th>
                <th>Hora Termino</th>
                <th>Fecha</th>
                <th>Actividad</th>
                <th>Equipo No.Serie</th>
                <th>ID Usuario</th>
                <th>Matricula Alumno</th>
                <th>Acciones</th>
            </tr>   
            </thead> 
            <tbody>
                @foreach($autoaccesos as $autoacceso)
                <tr>
                    <td>{{$autoacceso->folio}}</td>
                    <td>{{$autoacceso->hora_inicio}}</td>
                    <td>{{$autoacceso->hora_termino}}</td>
                    <td>{{$autoacceso->fecha}}</td>
                    <td>{{$autoacceso->actividad}}</td>
                    <td>{{$autoacceso->equipo_noserie}}</td>
                    <td>{{$autoacceso->usuario_id}}</td>
					          <td>{{$autoacceso->matricula_alumno}}</td>
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

                var table= $('#autoaccesos').DataTable({
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

                        $('#folio').val(data[0]);
                        $('#hora_inicio').val(data[1]);
                        $('#hora_termino').val(data[2]);
                        $('#fecha').val(data[3]);
                        $('#actividad').val(data[4]);
                        $('#equipo_noserie').val(data[5]);
                        $('#usuario_id').val(data[6]);
						            $('#matricula_alumno').val(data[7]);

                 
                        $('#editForm').attr('route', 'editarAuto', + data[0]);
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

                        $('#folio').val(data[0]);

                        $('#deleteForm').attr('route', 'borrarAuto', + data[0]);
                        $('#deleteModal').modal('show');
                    });
                    //end delete record 
                });
</script>
@endsection