@extends('layouts.plantillabase')
@section('contenido')
<br></br>

<!-- Modal Crear nuevo alumno-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('altaHorario')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>Número de Horario:</label>
                    <input type="text" name="num_horario" class= "form-control" readonly placeholder="Asigando automaticamente">
                    {!! $errors->first('num_horario', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Fecha:</label>
                    <select name="fecha">
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miercoles">Miércoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                    </select> 
                    {!! $errors->first('fecha', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Hora de inicio:</label>
                    <input type="time" name="hora_inicio" class= "form-control">
                    {!! $errors->first('hora_inicio', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Hora de termino:</label>
                    <input type="time" name="hora_termino" class= "form-control">
                    {!! $errors->first('hora_termino', '<small>:message</small><br>') !!}
            </div>

            <label>Laboratorio:</label>
            <div class="form-group">
                
                       <select name="laboratorio_lab_clave">
                       	@foreach($laboratorios as $item)
                       	  <option value="{{$item->lab_clave}}">{{$item->nombre}}
                       	  </option>
                       	@endforeach 
                        </select>
                        {!! $errors->first('laboratorio_lab_clave', '<small>:message</small><br>') !!}                      
            </div>

            <label>Periodos:</label>
            <div class="form-group">
                
                       <select name="periodo_id_periodo">
                       	@foreach($periodos as $item)
                       	  <option value="{{$item->id_periodo}}">{{$item->nombre}}
                       	  </option>
                       	@endforeach 
                        </select>
                        {!! $errors->first('periodo_id_periodo', '<small>:message</small><br>') !!}                      
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
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('editarHorario')}}" method="post" id="editForm">
      <div class="modal-body">       
                @csrf
                @method('PUT')
            <div class="form-group">
                <label>Número de Horario:</label>
                    <input type="text" name="num_horario" id="num_horario" class= "form-control" readonly>
                    {!! $errors->first('num_horario', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Fecha:</label>
                    <select name="fecha" id="fecha">
                        <option value="lunes">Lunes</option>
                        <option value="martes">Martes</option>
                        <option value="lunes">Miércoles</option>
                        <option value="martes">Jueves</option>
                        <option value="lunes">Viernes</option>
                    </select> 
                    {!! $errors->first('fecha', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Hora de inicio:</label>
                    <input type="time" name="hora_inicio" id="hora_inicio" class= "form-control">
                    {!! $errors->first('hora_inicio', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Hora de termino:</label>
                    <input type="time" name="hora_termino" id="hora_termino" class= "form-control">
                    {!! $errors->first('hora_termino', '<small>:message</small><br>') !!}
            </div>

            <label>Laboratorio:</label>
            <div class="form-group">
                
                       <select name="laboratorio_lab_clave" id="laboratorio_lab_clave">
                       	@foreach($laboratorios as $item)
                       	  <option value="{{$item->lab_clave}}">{{$item->nombre}}
                       	  </option>
                       	@endforeach 
                        </select>
                        {!! $errors->first('laboratorio_lab_clave', '<small>:message</small><br>') !!}                      
            </div>

            <label>Periodos:</label>
            <div class="form-group">
                
                       <select name="periodo_id_periodo" id="periodo_id_periodo">
                       	@foreach($periodos as $item)
                       	  <option value="{{$item->id_periodo}}">{{$item->nombre}}
                       	  </option>
                       	@endforeach 
                        </select>
                        {!! $errors->first('periodo_id_periodo', '<small>:message</small><br>') !!}                      
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
    <form action="{{route('borrarHorario')}}" method="POST" id="deleteForm">
      @csrf
      @method('DELETE')
      <div class="modal-body">       
            <input type="hidden" name="_method" value="DELETE">
        <p>¿Estas seguro de borrar este registro? Esta acción no puede revertirse. Para asegurarse, vuelva a escribir el número de horario. </p>

            <div class="form-group">
                <label>Número de Horario:</label>
                    <input type="text" name="num_horario" class= "form-control" id="num_horario" placeholder="Escriba el número de horario">
                    {!! $errors->first('num_horario', '<small>:message</small><br>') !!}
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

<!--Empieza modal de agregar usuario - horario--> 
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('altaUsuHora')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>Clave:</label>
                    <input type="text" name="clave" class= "form-control" placeholder="Asignado automaticamente" readonly>
                    {!! $errors->first('clave', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Horario:</label>
                        <select name="num_horario_fk">
                            @foreach($horarios as $item)
                              <option value="{{$item->num_horario}}">{{$item->num_horario}}
                              </option>
                            @endforeach 
                        </select>
                    {!! $errors->first('num_horario_fk', '<small>:message</small><br>') !!}
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
<!-- Termina modal de agregar usuario - horario -->

<!-- Empieza modal de eliminar usuario - horario -->
<div class="modal fade" id="deleteModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('borrarUsuHora')}}" method="POST" id="deleteForm1">
      @csrf
      @method('DELETE')
      <div class="modal-body">       
            <input type="hidden" name="_method" value="DELETE">
        <p>¿Estas seguro de borrar este registro? Esta acción no puede revertirse. Para asegurarse, vuelva a escribir la clave del registro. </p>

            <div class="form-group">
                <label>Clave:</label>
                    <input type="text" name="clave" class= "form-control" placeholder="Escriba la clave">
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
<!-- Termina modal de eliminar materia de usuario -->

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
<br></br>

<div class="card"> 
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar nuevo registro
            </button>
            <h4> Horarios registrados</h4>
            <table id="horarios" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Número de horario</th>
                    <th>Fecha</th>
                    <th>Hora Inicio</th>
                    <th>Hora Termino</th>
                    <th>Laboratorio </th>
                    <th>Periodo</th>
                    <th>Acciones</th>
                </tr>   
                </thead> 
                <tbody>
                    @foreach($horarios as $horario)
                    <tr>
                        <td>{{$horario->num_horario}}</td>
                        <td>{{$horario->fecha}}</td>
                        <td>{{$horario->hora_inicio}}</td>
                        <td>{{$horario->hora_termino}}</td>
                        <td>{{$horario->laboratorio_lab_clave}}</td>
                        <td>{{$horario->periodo_id_periodo}}</td>
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


    <div class="card"> 
        <div class="card-body">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Agregar registro</button>
            <h4> Horario - Usuario </h4>
            <table id="usuarios" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Clave</th>
                    <th>Horario</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>   
                </thead> 
                <tbody>
                    @foreach($usoHora as $usoHora1)
                    <tr>
                        <td>{{$usoHora1->clave}}</td>
                        <td>{{$usoHora1->num_horario_fk}}</td>
                        <td>{{$usoHora1->id_usuario_fk}}</td>
                        <td>
                            <a href="#" class="btn btn-danger delete1">Borrar</a>
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

                var table= $('#horarios').DataTable({
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

                        $('#num_horario').val(data[0]);
                        $('#fecha').val(data[1]);
                        $('#hora_inicio').val(data[2]);
                        $('#hora_termino').val(data[3]);
                        $('#laboratorio_lab_clave').val(data[4]);
                        $('#periodo_id_periodo').val(data[5]);
                 
                        $('#editForm').attr('route', 'editarHorario', + data[0]);
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

                        $('#num_horario').val(data[0]);

                        $('#deleteForm').attr('route', 'borrarHorario', + data[0]);
                        $('#deleteModal').modal('show');
                    });
                    //end delete record 
                });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {

                var table= $('#usuarios').DataTable({
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
                    
                    //star delete record 
                    table.on('click', '.delete1', function(){

                        $tr = $(this).closest('tr');
                        if ($($tr).hasClass('child')){
                            $tr =  $tr.prev('.parent');
                        }
                        var data = table.row($tr).data();
                        console.log(data);

                        $('#clave').val(data[0]);

                        $('#deleteForm1').attr('route', 'borrarUsuHora', + data[0]);
                        $('#deleteModal1').modal('show');
                    });
                    //end delete record 
                });
        </script>
@endsection
