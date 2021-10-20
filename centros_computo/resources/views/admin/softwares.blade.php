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
    <form action="{{route('altaSoftware')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>Clave de producto:</label>
                    <input type="text" name="clave" class= "form-control" placeholder="Escriba la clave">
                    {!! $errors->first('clave', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Nombre:</label>
                    <input type="text" name="nombre" class= "form-control" placeholder="Escriba el nombre">
                    {!! $errors->first('nombre', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Descripción del software:</label>
                    <textarea name="descripcion" id="descripcion" rows="5" cols="40"></textarea>
                    {!! $errors->first('descripcion', '<small>:message</small><br>') !!}
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
    <form action="{{route('editarSoftware')}}" method="post" id="editForm">
      <div class="modal-body">       
                @csrf
                @method('PUT')
            <div class="form-group">
                <label>Clave de producto:</label>
                    <input type="text" name="clave" id="clave" class= "form-control" readonly>
                    {!! $errors->first('clave', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class= "form-control" placeholder="Escriba el nombre">
                    {!! $errors->first('nombre', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Descripción del software:</label>
                    <textarea name="descripcion" id="descripcion" rows="5" cols="40"></textarea>
                    {!! $errors->first('descripcion', '<small>:message</small><br>') !!}
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
    <form action="{{route('borrarSoftware')}}" method="POST" id="deleteForm">
      @csrf
      @method('DELETE')
      <div class="modal-body">       
            <input type="hidden" name="_method" value="DELETE">
        <p>¿Estas seguro de borrar este registro? Esta acción no puede revertirse. Para asegurarse, vuelva a escribir la clavee del producto. </p>

            <div class="form-group">
                <label>Clave de producto:</label>
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
<!--Termina modal de eliminar alumno-->

<!--Empieza modal de agregar software-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('altaEquiSoft')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>Clave:</label>
                    <input type="text" name="clave" class= "form-control" placeholder="Asignado automaticamente" readonly>
                    {!! $errors->first('clave', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>No Serie Equipo:</label>
                    	<select name="equipo_no_serie">
	                       	@foreach($equipos as $item)
	                       	  <option value="{{$item->no_serie}}">{{$item->no_serie}}
	                       	  </option>
	                       	@endforeach 
                        </select>
                    {!! $errors->first('equipo_no_serie', '<small>:message</small><br>') !!}
            </div>
            <div class="form-group">
                <label>Clave del software:</label>
                    	<select name="software_clave">
	                       	@foreach($softwareS as $item)
	                       	  <option value="{{$item->clave}}">{{$item->clave}}
	                       	  </option>
	                       	@endforeach 
                        </select>
                    {!! $errors->first('software_clave', '<small>:message</small><br>') !!}
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
<!--Termina modal de agregar software-->

<!-- Empieza modal de eliminar equipo_software -->
<div class="modal fade" id="deleteModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('borrarEquiSoft')}}" method="POST" id="deleteForm1">
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
        	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar nuevo software</button>
        	<br></br>
            <h4> Software registrado</h4>
            <table id="softwaress" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>   
                </thead> 
                <tbody>
                    @foreach($softwareS as $software)
                    <tr>
                        <td>{{$software->clave}}</td>
                        <td>{{$software->nombre}}</td>
                        <td>{{$software->descripcion}}</td>
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
        	<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Agregar software a equipo </button>
        	<br></br>
        <h4> Equipos - Software</h4>
        <table id="equipos" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Clave</th>
                <th>No. Serie Equipo</th>
                <th>Nombre del producto</th>
                <th>Acciones</th>
            </tr>   
            </thead> 
            <tbody>
                @foreach($data as $dat)
                <tr>
                    <td>{{$dat->clave}}</td>
                    <td>{{$dat->no_serie}}</td>
                    <td>{{$dat->nombre}}</td>
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

                var table= $('#softwaress').DataTable({
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
                        $('#nombre').val(data[1]);
                        $('#descripcion').val(data[2]);
                 
                        $('#editForm').attr('route', 'editarSoftware', + data[0]);
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

                        $('#deleteForm').attr('route', 'borrarSoftware', + data[0]);
                        $('#deleteModal').modal('show');
                    });
                    //end delete record 
                });
        </script>
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
                    
                    //star delete record 
                    table.on('click', '.delete1', function(){

                        $tr = $(this).closest('tr');
                        if ($($tr).hasClass('child')){
                            $tr =  $tr.prev('.parent');
                        }
                        var data = table.row($tr).data();
                        console.log(data);

                        $('#clave').val(data[0]);

                        $('#deleteForm1').attr('route', 'borrarEquiSoft', + data[0]);
                        $('#deleteModal1').modal('show');
                    });
                    //end delete record 
                });
        </script>

@endsection