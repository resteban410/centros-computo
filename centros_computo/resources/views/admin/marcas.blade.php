@extends('layouts.plantillabase')
@section('contenido')
<br></br>

<!-- Modal Crear nueva marca-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('altaMarca')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>ID Marca:</label>
                    <input type="text" name="id_marca" class= "form-control" placeholder="Asignado automaticamente" readonly>
                    {!! $errors->first('id_marca', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Nombre:</label>
                    <input type="text" name="nombre_marca" class= "form-control" placeholder="Escriba el nombre" required="">
                    {!! $errors->first('nombre_marca', '<small>:message</small><br>') !!}
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
      </div>
    <form action="{{route('editarMarca')}}" method="post" id="editForm">
      <div class="modal-body">       
                @csrf
                @method('PUT')
            <div class="form-group">
                <label>ID Marca:</label>
                    <input type="text" name="id_marca" id="id_marca" class= "form-control" readonly>
                    {!! $errors->first('id_marca', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Nombre:</label>
                    <input type="text" name="nombre_marca" id="nombre_marca" class= "form-control" placeholder="Escriba el nombre" required="">
                    {!! $errors->first('nombre_marca', '<small>:message</small><br>') !!}
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
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
      </div>
    <form action="{{route('borrarMarca')}}" method="POST" id="deleteForm">
      @csrf
      @method('DELETE')
      <div class="modal-body">       
            <input type="hidden" name="_method" value="DELETE">
        <p>¿Estas seguro de borrar este registro? Esta acción no puede revertirse. Para asegurarse, vuelva a escribir el ID de la marca. </p>

            <div class="form-group">
                <label>ID Marca:</label>
                    <input type="text" name="id_marca" id="id_marca" class= "form-control" placeholder="Escribe el ID del periodo" required="">
                    {!! $errors->first('id_marca', '<small>:message</small><br>') !!}
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
            <h4> Marcas registradas</h4>
            <table id="marcass" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>   
                </thead> 
                <tbody>
                    @foreach($marcas as $marca)
                    <tr>
                        <td>{{$marca->id_marca}}</td>
                        <td>{{$marca->nombre_marca}}</td>
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

                var table= $('#marcass').DataTable({
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

                        $('#id_marca').val(data[0]);
                        $('#nombre_marca').val(data[1]);
                 
                        $('#editForm').attr('route', 'editarMarca', + data[0]);
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

                        $('#id_marca').val(data[0]);

                        $('#deleteForm').attr('route', 'borrarMarca', + data[0]);
                        $('#deleteModal').modal('show');
                    });
                    //end delete record 
                });
        </script>
@endsection