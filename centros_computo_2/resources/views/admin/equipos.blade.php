<?php
use Illuminate\Support\Facades\DB;
?>
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
    <form action="{{route('altaEqui')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>Número de serie:</label>
                    <input type="text" name="no_serie" class= "form-control" placeholder="Escriba el número de serie del equipo">
                    {!! $errors->first('no_serie', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Número de equipo:</label>
                    <input type="text" name="num_equipo" class= "form-control" placeholder="Escriba el número del equipo">
                    {!! $errors->first('num_equipo', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Modelo:</label>
                    <input type="text" name="modelo" class= "form-control" placeholder="Escriba el modelo del equipo"> 
                    {!! $errors->first('modelo', '<small>:message</small><br>') !!}
            </div>
            <label>Laboratorio:</label>
            <div class="form-group">
                
                       <select name="laboratorio_clave">
                       	@foreach($laboratorios as $item)
                       	  <option value="{{$item->lab_clave}}">{{$item->nombre}}
                       	  </option>
                       	@endforeach 
                        </select>
                        {!! $errors->first('laboratorio_clave', '<small>:message</small><br>') !!}
                                                 
            </div>
            <label>Marca:</label>
            <div class="form-group">
                
                       <select name="marca_id">
                       	@foreach($marcas as $item)
                       	  <option value="{{$item->id_marca}}">{{$item->nombre}}
                       	  </option>
                       	@endforeach 
                        </select>
                        {!! $errors->first('marca_id', '<small>:message</small><br>') !!}
                                                 
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
    <form action="{{route('editarEqui')}}" method="post" id="editForm">
      <div class="modal-body">       
                @csrf
                @method('PUT')
            <div class="form-group">
                <label>Número de serie:</label>
                    <input type="text" name="no_serie" id="no_serie" class= "form-control" placeholder="Escriba el número de serie del equipo">
                    {!! $errors->first('no_serie', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Número de equipo:</label>
                    <input type="text" name="num_equipo" id="num_equipo" class= "form-control" placeholder="Escriba el número del equipo">
                    {!! $errors->first('num_equipo', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Modelo:</label>
                    <input type="text" name="modelo" id="modelo" class= "form-control" placeholder="Escriba el modelo del equipo"> 
                    {!! $errors->first('modelo', '<small>:message</small><br>') !!}
            </div>
            <label>Laboratorio:</label>
            <div class="form-group">
                
                       <select name="laboratorio_clave">
                       	@foreach($laboratorios as $item)
                       	  <option value="{{$item->lab_clave}}">{{$item->nombre}}
                       	  </option>
                       	@endforeach 
                        </select>
                        {!! $errors->first('laboratorio_clave', '<small>:message</small><br>') !!}
                                                 
            </div>
            <label>Marca:</label>
            <div class="form-group">
                
                       <select name="marca_id">
                       	@foreach($marcas as $item)
                       	  <option value="{{$item->id_marca}}">{{$item->nombre}}
                       	  </option>
                       	@endforeach 
                        </select>
                        {!! $errors->first('marca_id', '<small>:message</small><br>') !!}
                                                 
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
    <form action="{{route('borrarEqui')}}" method="POST" id="deleteForm">
      @csrf
      @method('DELETE')
      <div class="modal-body">       
            <input type="hidden" name="_method" value="DELETE">
        <p>¿Estas seguro de borrar este registro? Esta acción no puede revertirse. Para asegurarse, vuelva a escribir el número de serie del equipo. </p>

            <div class="form-group">
                <label>Número de serie:</label>
                    <input type="text" name="no_serie" id="no_serie" class= "form-control" placeholder="Escriba el número de serie del equipo">
                    {!! $errors->first('no_serie', '<small>:message</small><br>') !!}
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
        <h4> Equipos registrados</h4>
        <table id="equipos" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Núm_Serie</th>
                <th>Núm_Equipo</th>
                <th>Modelo</th>
                <th>Ubicación</th>
                <th>Nombre del laboratorio</th>
                <th>Marca</th>
                <th>Acciones</th>
            </tr>   
            </thead> 
            <tbody>
                @foreach($equipos as $equipo)
                <tr>
                    <td>{{$equipo->no_serie}}</td>
                    <td>{{$equipo->num_equipo}}</td>
                    <td>{{$equipo->modelo}}</td>
                    <td>{{$equipo->laboratorio_clave}}</td>
                    <td>
                      <?php
                      $query = DB::table('laboratorio')->select('nombre')->where('lab_clave',$equipo->laboratorio_clave)->get();
                      echo "$query";
                      ?>
                    </td>
                    <td>{{$equipo->marca_id}}</td>
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

                var table= $('#equipos').DataTable({
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

                        $('#no_serie').val(data[0]);
                        $('#num_equipo').val(data[1]);
                        $('#modelo').val(data[2]);
                        $('#laboratorio_clave').val(data[3]);
                        $('#marca_id').val(data[5]);

                 
                        $('#editForm').attr('route', 'editarEqui', + data[0]);
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

                        $('#no_serie').val(data[0]);

                        $('#deleteForm').attr('route', 'borrarEqui', + data[0]);
                        $('#deleteModal').modal('show');
                    });
                    //end delete record 
                });
        </script>
@endsection