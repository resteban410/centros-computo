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
    <form action="{{route('altaMat')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>NRC:</label>
                    <input type="text" name="nrc" class= "form-control" placeholder="Escriba el nrc">
                    {!! $errors->first('nrc', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Nombre::</label>
                    <input type="text" name="nombre" class= "form-control" placeholder="Escriba el nombre">
                    {!! $errors->first('nombre', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Carrera:</label>
                    <select name="carrera">
                       	<option value="General">Generales</option>
                        <option value="ISTII">Ingeniería en Sistemas y Tecnología de la Información Industrial</option>
                        <option value="IPGI">Ingeniería en Procesos y Gestión Industrial</option>
                        <option value="IAA">Ingeniería en Automatización y Autotrónica </option>
                    </select>    
                    {!! $errors->first('carrera', '<small>:message</small><br>') !!}                                  
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
    <form action="{{route('editarMat')}}" method="post" id="editForm">
      <div class="modal-body">       
                @csrf
                @method('PUT')
            <div class="form-group">
                <label>NRC:</label>
                    <input type="text" name="nrc" id="nrc" class= "form-control" readonly>
                    {!! $errors->first('nrc', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class= "form-control" placeholder="Escriba el nombre">
                    {!! $errors->first('nombre', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Carrera:</label>
                    <select name="carrera" id="carrera">
                       	<option value="General">Generales</option>
                        <option value="ISTII">Ingeniería en Sistemas y Tecnología de la Información Industrial</option>
                        <option value="IPGI">Ingeniería en Procesos y Gestión Industrial</option>
                        <option value="IAA">Ingeniería en Automatización y Autotrónica </option>
                    </select>  
                    {!! $errors->first('carrera', '<small>:message</small><br>') !!}                                    
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
    <form action="{{route('borrarMat')}}" method="POST" id="deleteForm">
      @csrf
      @method('DELETE')
      <div class="modal-body">       
            <input type="hidden" name="_method" value="DELETE">
        <p>¿Estas seguro de borrar este registro? Esta acción no puede revertirse. Para asegurarse, vuelva a escribir el NRC de la materia. </p>

            <div class="form-group">
                <label>NRC:</label>
                    <input type="text" name="nrc" id="nrc" class= "form-control" placeholder="Escriba la clave">
                    {!! $errors->first('nrc', '<small>:message</small><br>') !!}
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

<!--- Empieza modal de agregar materia a usuario-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('altaMatUsu')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>Clave:</label>
                    <input type="text" name="clave" class= "form-control" placeholder="Asignado automaticamente" readonly>
                    {!! $errors->first('clave', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Materia:</label>
                        <select name="materia_nrc">
                            @foreach($materias as $item)
                              <option value="{{$item->nrc}}">{{$item->nrc}}
                              </option>
                            @endforeach 
                        </select>
                    {!! $errors->first('materia_nrc', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Usuario:</label>
                        <select name="usu_id_usu">
                            @foreach($usuarios as $item)
                              <option value="{{$item->id}}">{{$item->id}}
                              </option>
                            @endforeach 
                        </select>
                    {!! $errors->first('usu_id_usu', '<small>:message</small><br>') !!}
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
<!-- Termina modal de agregar materia a usuario -->

<!-- Empieza modal de eliminar materia de usuario -->
<div class="modal fade" id="deleteModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('borrarMatUsu')}}" method="POST" id="deleteForm1">
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
            <h4> Materias registradas</h4>
            <table id="materias" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>NRC</th>
                    <th>Nombre</th>
                    <th>Carrera</th>
                    <th>Acciones</th>
                </tr>   
                </thead> 
                <tbody>
                    @foreach($materias as $materia)
                    <tr>
                        <td>{{$materia->nrc}}</td>
                        <td>{{$materia->nombre}}</td>
                        <td>{{$materia->carrera}}</td>
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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Agregar materia a usuario </button>
            <h4> Materia - Usuario </h4>
            <table id="usuarios" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Clave</th>
                    <th>Materia</th>
                    <th>Usuario</th>
                    <th>Acciones</th>
                </tr>   
                </thead> 
                <tbody>
                    @foreach($matUso as $MatUso)
                    <tr>
                        <td>{{$MatUso->clave}}</td>
                        <td>{{$MatUso->materia_nrc}}</td>
                        <td>{{$MatUso->usu_id_usu}}</td>
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

                var table= $('#materias').DataTable({
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

                        $('#nrc').val(data[0]);
                        $('#nombre').val(data[1]);
                        $('#carrera').val(data[2]);
                 
                        $('#editForm').attr('route', 'editarMat', + data[0]);
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

                        $('#nrc').val(data[0]);

                        $('#deleteForm').attr('route', 'borrarMat', + data[0]);
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

                        $('#deleteForm1').attr('route', 'borrarMatUso', + data[0]);
                        $('#deleteModal1').modal('show');
                    });
                    //end delete record 
                });
        </script>
@endsection
