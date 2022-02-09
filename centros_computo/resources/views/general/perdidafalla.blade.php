@extends('layouts.plantillabase2')
@section('contenido')
<br></br>

<!--Ventanas modales fallas-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <form action="{{route('FallaA')}}" method="post">
        <div class="modal-body">       
            @csrf
            <div class="form-group">
                <label>Folio:</label>
                <input type="text" name="clave_fallas" id="clave_fallas" class= "form-control" placeholder="Asignado automaticamente" readonly>
            </div>
      		<div class="form-group">
      			<label>Fecha Reporte:</label>
      			<input type="date" name="fecha_reporte" id="fecha_reporte" class= "form-control">
                {!! $errors->first('fecha_reporte', '<small>:message</small><br>') !!}
      		</div>
            <div class="form-group">
      			<label>Fecha Atención:</label>
      			<input type="date" name="fecha_atencion" id="fecha_atencion" class= "form-control">
                {!! $errors->first('fecha_atencion', '<small>:message</small><br>') !!}
      		</div>
			    <label>Descripcion:</label>
            <div class="form-group">                
                    <textarea name="descripcion" id="descripcion" rows="5" cols="40"></textarea>
                    {!! $errors->first('descripcion', '<small>:message</small><br>') !!}
            </div>
            <label>Equipo:</label>
            <div class="form-group">
                <select name="equipo_noserie_equipo">
                @foreach($equipos as $item)
                    <option value="{{$item->no_serie}}">{{$item->no_serie}}</option>
                @endforeach 
                </select>   
                {!! $errors->first('equipo_noserie_equipo', '<small>:message</small><br>') !!}                   
            </div>
            <label>Usuario:</label>
            <div class="form-group">
                <select name="usuario_id_usuario">
                @foreach($usuarios as $item)
                    <option value="{{$item->id}}">{{$item->name}} - {{$item->last_name}}
                    </option>
                @endforeach 
                </select>
                {!! $errors->first('usuario_id_usuario', '<small>:message</small><br>') !!}                      
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

<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Editar registro</h5>
        </div>
    <form action="{{route('FallaB')}}" method="post" id="editForm">
        <div class="modal-body">       
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Folio:</label>
                <input type="text" name="clave_fallas" id="clave_fallas" class= "form-control" placeholder="Asignado automaticamente" readonly>
            </div>
      		<div class="form-group">
      			<label>Fecha perdida:</label>
      			<input type="date" name="fecha_reporte" id="fecha_reporte" class= "form-control">
                {!! $errors->first('fecha_reporte', '<small>:message</small><br>') !!}
      		</div>
            <div class="form-group">
      			<label>Fecha Atención:</label>
      			<input type="date" name="fecha_atencion" id="fecha_atencion" class= "form-control">
                {!! $errors->first('fecha_atencion', '<small>:message</small><br>') !!}
      		</div>
            <div class="form-group">   
                <label>Descripcion:</label>             
                <textarea name="descripcion" id="descripcion" rows="5" cols="40"></textarea>
                {!! $errors->first('descripcion', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Equipo:</label>
                <select name="equipo_noserie_equipo">
                @foreach($equipos as $item)
                    <option value="{{$item->no_serie}}">{{$item->no_serie}}</option>
                @endforeach 
                </select>   
                {!! $errors->first('equipo_noserie_equipo', '<small>:message</small><br>') !!}                   
            </div>
            <div class="form-group">
                <label>Usuario:</label>
                <select name="usuario_id_usuario">
                @foreach($usuarios as $item)
                    <option value="{{$item->id}}">{{$item->name}} - {{$item->last_name}}
                    </option>
                @endforeach 
                </select>
                {!! $errors->first('usuario_id_usuario', '<small>:message</small><br>') !!}                      
            </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href=""class="btn btn-secondary">Cerrar</a>
      </div>
    </form>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
      </div>
    <form action="{{route('FallaC')}}" method="POST" id="deleteForm">
      @csrf
      @method('DELETE')
      <div class="modal-body">       
        <input type="hidden" name="_method" value="DELETE">
        <p>¿Estas seguro de borrar este registro? Esta acción no puede revertirse. Para asegurarse, vuelva a escribir el número de folio del registro seleccionado. </p>
            <div class="form-group">
                <label>Folio:</label>
                <input type="text" name="clave_fallas" id="clave_fallas" class= "form-control" placeholder="Escriba el número de folio">
                {!! $errors->first('clave_fallas', '<small>:message</small><br>') !!}  
            </div>      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Borrar</button>
        <a href=""class="btn btn-secondary">Cerrar</a>
      </div>
    </form>
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

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar nuevo registro
    </button>
</div>

<br></br>
<div class="card"> 
        <div class="card-body">
        <h4> Historial de Fallas</h4>
        <table id="fallas" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Folio</th>
                <th>Fecha Reporte</th>
                <th>Fecha Atencion</th>
                <th>Descripcion</th>
                <th>No.Serie Equipo</th>
                <th>Usuario ID</th>
                <th>Acciones</th>
            </tr>   
            </thead> 
            <tbody>
                @foreach($fallas as $falla)
                <tr>
                    <td>{{$falla->clave_fallas}}</td>
                    <td>{{$falla->fecha_reporte}}</td>
                    <td>{{$falla->fecha_atencion}}</td>
                    <td>{{$falla->descripcion}}</td>
                    <td>{{$falla->equipo_noserie_equipo}}</td>
                    <td>{{$falla->usuario_id_usuario}}</td>
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

<!--Ventanas modales perdidas-->
<div class="modal fade" id="ModalPerdidaAlta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Nuevo registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('PerdidaA')}}" method="post">
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
                
                       <select name="equipo_no_serie_equipo">
                       	@foreach($equipos as $item)
                       	  <option value="{{$item->no_serie}}">{{$item->no_serie}}
                       	  </option>
                       	@endforeach 
                        </select>   
                        {!! $errors->first('equipo_no_serie_equipo', '<small>:message</small><br>') !!}                   
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
<div class="modal fade" id="ModalPerdidaEditar" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Editar registro</h5>
      </div>
    <form action="{{route('PerdidaB')}}" method="post" id="editForm2">
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
                
                       <select name="equipo_no_serie_equipo">
                       	@foreach($equipos as $item)
                       	  <option value="{{$item->no_serie}}">{{$item->no_serie}}
                       	  </option>
                       	@endforeach 
                        </select>   
                        {!! $errors->first('equipo_no_serie_equipo', '<small>:message</small><br>') !!}                   
            </div>    
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href=""class="btn btn-secondary">Cerrar</a>
      </div>
    </form>
    </div>
  </div>
</div>
<!--Termina modal de editar alumno-->

<!-- Empieza modal de eliminar alumno -->
<div class="modal fade" id="ModalPerdidaBorrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
      </div>
    <form action="{{route('PerdidaC')}}" method="POST" id="deleteForm2">
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
        <button type="submit" class="btn btn-primary">Borrar</button>
        <a href=""class="btn btn-secondary">Cerrar</a>
      </div>
    </form>
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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalPerdidaAlta">
        Agregar nuevo registro
    </button>
</div>

<br></br>
<div class="card"> 
        <div class="card-body">
        <h4> Historial de Perdidas</h4>
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
                @foreach($perdidas as $perdida)
                <tr>
                    <td>{{$perdida->clave}}</td>
                    <td>{{$perdida->fecha_perdida}}</td>
                    <td>{{$perdida->hora_perdida}}</td>
                    <td>{{$perdida->observaciones}}</td>
					<td>{{$perdida->equipo_no_serie_equipo}}</td>
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
                        $('#equipo_no_serie_equipo').val(data[4]);

                 
                        $('#editForm2').attr('route', 'editarPerdida', + data[0]);
                        $('#ModalPerdidaEditar').modal('show');
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

                        $('#deleteForm2').attr('route', 'borrarPerdida', + data[0]);
                        $('#ModalPerdidaBorrar').modal('show');
                    });
                    //end delete record 
                });
        </script>

<script type="text/javascript">
            $(document).ready(function() {

                var table= $('#fallas').DataTable({
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

                        $('#clave_fallas').val(data[0]);
                        $('#fecha_reporte').val(data[1]);
                        $('#fecha_atencion').val(data[2]);
                        $('#descripcion').val(data[3]);
                        $('#equipo_noserie_equipo').val(data[4]);
                        $('#usuario_id_usuario').val(data[5]);
                 
                        $('#editForm').attr('route', 'FallaB', + data[0]);
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

                        $('#clave_fallas').val(data[0]);

                        $('#deleteForm').attr('route', 'FallaC', + data[0]);
                        $('#deleteModal').modal('show');
                    });
                    //end delete record 
                });
        </script>
@endsection