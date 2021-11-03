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
    <form action="{{route('altaPeriodo')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>ID Periodo:</label>
                    <input type="text" name="id_periodo" class= "form-control" placeholder="Asignado automaticamente" readonly>
                    {!! $errors->first('id_periodo', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Nombre:</label>
                    <input type="text" name="nombre_periodo" class= "form-control" placeholder="Escriba el nombre">
                    {!! $errors->first('nombre_periodo', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Fecha de Inicio:</label>
                    <input type="date" name="fecha_inicio" id="fecha_inicio" rows="5" cols="40">
                    {!! $errors->first('fecha_inicio', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Fecha de Termino:</label>
                    <input type="date" name="fecha_termino" id="fecha_termino" rows="5" cols="40">
                    {!! $errors->first('fecha_termino', '<small>:message</small><br>') !!}
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
    <form action="{{route('editarPeriodo')}}" method="post" id="editForm">
      <div class="modal-body">       
                @csrf
                @method('PUT')
            <div class="form-group">
                <label>ID Periodo:</label>
                    <input type="text" name="id_periodo" id="id_periodo" class= "form-control" readonly>
                    {!! $errors->first('id_periodo', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Nombre:</label>
                    <input type="text" name="nombre_periodo" id="nombre_periodo" class= "form-control" placeholder="Escriba el nombre">
                    {!! $errors->first('nombre_periodo', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Fecha de Inicio:</label>
                    <input type="date" name="fecha_inicio" id="fecha_inicio" rows="5" cols="40">
                    {!! $errors->first('fecha_inicio', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Fecha de Termino:</label>
                    <input type="date" name="fecha_termino" id="fecha_termino" rows="5" cols="40">
                    {!! $errors->first('fecha_termino', '<small>:message</small><br>') !!}
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
    <form action="{{route('borrarPeriodo')}}" method="POST" id="deleteForm">
      @csrf
      @method('DELETE')
      <div class="modal-body">       
            <input type="hidden" name="_method" value="DELETE">
        <p>¿Estas seguro de borrar este registro? Esta acción no puede revertirse. Para asegurarse, vuelva a escribir el ID del periodo. </p>

            <div class="form-group">
                <label>ID Periodo:</label>
                    <input type="text" name="id_periodo" id="id_periodo" class= "form-control" placeholder="Escribe el ID del periodo">
                    {!! $errors->first('id_periodo', '<small>:message</small><br>') !!}
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
</div>
<br></br>

<div class="card"> 
        <div class="card-body">
        	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar nuevo periodo</button>
        	<br></br>
            <h4> Periodos registrados</h4>
            <table id="periodoss" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Termino</th>
                    <th>Acciones</th>
                </tr>   
                </thead> 
                <tbody>
                    @foreach($periodos as $periodo)
                    <tr>
                        <td>{{$periodo->id_periodo}}</td>
                        <td>{{$periodo->nombre_periodo}}</td>
                        <td>{{$periodo->fecha_inicio}}</td>
                        <td>{{$periodo->fecha_termino}}</td>
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

                var table= $('#periodoss').DataTable({
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

                        $('#id_periodo').val(data[0]);
                        $('#nombre_periodo').val(data[1]);
                        $('#fecha_inicio').val(data[2]);
                        $('#fecha_termino').val(data[3]);
                 
                        $('#editForm').attr('route', 'editarPeriodo', + data[0]);
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

                        $('#id_periodo').val(data[0]);

                        $('#deleteForm').attr('route', 'borrarPeriodo', + data[0]);
                        $('#deleteModal').modal('show');
                    });
                    //end delete record 
                });
        </script>
@endsection