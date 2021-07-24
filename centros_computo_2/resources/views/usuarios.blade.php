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
    <form action="{{route('altaUsu')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>ID:</label>
                    <input type="text" name="id" class= "form-control" placeholder="Escriba la clave">
                    {!! $errors->first('id', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Nombre:</label>
                    <input type="text" name="nombre" class= "form-control" placeholder="Escriba el nombre"> 
                    {!! $errors->first('nombre', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Apellido:</label>
                    <input type="text" name="apellido" class= "form-control" placeholder="Escriba los apellidos">
                    {!! $errors->first('apellido', '<small>:message</small><br>') !!} 
            </div>

            <div class="form-group">
                <label>Contraseña:</label>
                    <input type="password" name="contraseña" class= "form-control" placeholder="Escriba la contraseña"> 
                    {!! $errors->first('contraseña', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Correo Electronico:</label>
                    <input type="email" name="correo_electronico" class="form-control" placeholder="Ej.:usuario@servidor.com">
                    {!! $errors->first('correo_electronico', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Dirección:</label>
                    <input type="text" name="direccion" class= "form-control" placeholder="Escriba la direccion"> 
                    {!! $errors->first('direccion', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Teléfono:</label>
                    <input type="text" name="telefono" class= "form-control" placeholder="Escriba el número de telefono"> 
                    {!! $errors->first('telefono', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Tipo:</label>
                    <select name="tipo">
                        <option value="usu">Usuario</option>
                        <option value="admin">Administrador</option>
                    </select> 
                    {!! $errors->first('tipo', '<small>:message</small><br>') !!}                                     
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
    <form action="{{route('editarUsu')}}" method="post" id="editForm">
      <div class="modal-body">       
                @csrf
                @method('PUT')
            <div class="form-group">
                <label>ID:</label>
                    <input type="text" name="id" id="id" class= "form-control" placeholder="Escriba la clave">
                    {!! $errors->first('id', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class= "form-control" placeholder="Escriba el nombre"> 
                    {!! $errors->first('nombre', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Apellido:</label>
                    <input type="text" name="apellido" id="apellido" class= "form-control" placeholder="Escriba los apellidos"> 
                    {!! $errors->first('apellido', '<small>:message</small><br>') !!} 
            </div>

            <div class="form-group">
                <label>Contraseña:</label>
                    <input type="password" name="contraseña" id="contraseña" class= "form-control" placeholder="Escriba la contraseña"> 
                    {!! $errors->first('contraseña', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Correo Electronico:</label>
                    <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" placeholder="Ej.:usuario@servidor.com">
                    {!! $errors->first('correo_electronico', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Dirección:</label>
                    <input type="text" name="direccion" id="direccion" class= "form-control" placeholder="Escriba la direccion"> 
                    {!! $errors->first('direccion', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Teléfono:</label>
                    <input type="text" name="telefono" id="telefono" class= "form-control" placeholder="Escriba el número de telefono"> 
                    {!! $errors->first('telefono', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Tipo:</label>
                    <select name="tipo" id="tipo">
                        <option value="usu">Usuario</option>
                        <option value="admin">Administrador</option>
                    </select>               
                    {!! $errors->first('tipo', '<small>:message</small><br>') !!}                           
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
    <form action="{{route('borrarUsu')}}" method="POST" id="deleteForm">
      @csrf
      @method('DELETE')
      <div class="modal-body">       
            <input type="hidden" name="_method" value="DELETE">
        <p>¿Estas seguro de borrar este registro? Esta acción no puede revertirse. Para asegurarse, vuelva a escribir el ID del usuario. </p>

            <div class="form-group">
                <label>ID:</label>
                    <input type="text" name="id" id="id" class= "form-control" placeholder="Escriba la clave">
                    {!! $errors->first('id', '<small>:message</small><br>') !!}
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
        <h4> Usuarios registrados</h4>
        <table id="usuarios" class="display nowrap" style="width:100%">
            <thead>
            <tr>
            	<th>Acciones</th>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
               	<th>Contraseña</th>	
                <th>Correo Electrónico</th>
               	<th>Dirección</th>	
                <th>Teléfono</th>
                <th>Tipo</th>
                
            </tr>   
            </thead> 
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>
                        <a href="#" class="btn btn-success edit">Editar</a>
                        <a href="#" class="btn btn-danger delete">Borrar</a>
                    </td>
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellido}}</td>
                   	<td>{{$usuario->contraseña}}</td>	
                    <td>{{$usuario->correo_electronico}}</td>
                   	<td>{{$usuario->direccion}}</td>		
                    <td>{{$usuario->telefono}}</td>
                    <td>{{$usuario->tipo}}</td>
                    
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
                    //start edit record 
                    table.on('click', '.edit', function(){

                        $tr = $(this).closest('tr');
                        if ($($tr).hasClass('child')){
                            $tr =  $tr.prev('.parent');
                        }
                        var data = table.row($tr).data();
                        console.log(data);

                        $('#id').val(data[1]);
                        $('#nombre').val(data[2]);
                        $('#apellido').val(data[3]);
                        $('#contraseña').val(data[4]);
                        $('#correo_electronico').val(data[5]);
                        $('#direccion').val(data[6]);
                        $('#telefono').val(data[7]);
                        $('#tipo').val(data[8]);
                 
                        $('#editForm').attr('route', 'editarUsu', + data[1]);
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

                        $('#id').val(data[1]);

                        $('#deleteForm').attr('route', 'borrarUsu', + data[1]);
                        $('#deleteModal').modal('show');
                    });
                    //end delete record 
                });
        </script>
@endsection