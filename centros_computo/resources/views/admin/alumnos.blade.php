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
    <form action="{{route('altalum')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>Matricula:</label>
                    <input type="text" name="matricula" class= "form-control" placeholder="Escriba la matricula" required="" pattern="[0-9]+">
                    {!! $errors->first('matricula', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Nombre:</label>
                    <input type="text" name="nombre" class= "form-control" placeholder="Escriba el nombre" required="">
                    {!! $errors->first('nombre', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Apellido:</label>
                    <input type="text" name="apellido" class= "form-control" placeholder="Escriba los apellidos" required=""> 
                    {!! $errors->first('apellido', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Carrera:</label>
                       <select name="carrera">
                          <option value="ISTII">Ingeniería en Sistemas y Tecnología de la Información Industrial</option>
                          <option value="IPGI">Ingeniería en Procesos y Gestión Industrial</option>
                          <option value="IAA">Ingeniería en Automatización Autotrónica </option>
                        </select>                                      
                    {!! $errors->first('carrera', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Correo Electronico:</label>
                       <input type="email" name="correo_electronico" class="form-control" placeholder="Ej.:usuario@servidor.com" required="">
                    {!! $errors->first('correo_electronico', '<small>:message</small><br>') !!}
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
    <form action="{{route('editaralumno')}}" method="post" id="editForm">
      <div class="modal-body">       
                @csrf
                @method('PUT')
            <div class="form-group">
                <label>Matricula:</label>
                    <input type="text" name="matricula" id="matricula" class= "form-control" placeholder="Escriba la matricula" required="" pattern="[0-9]+">
                    {!! $errors->first('matricula', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class= "form-control" placeholder="Escriba el nombre" required="">
                    {!! $errors->first('nombre', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Apellido:</label>
                    <input type="text" name="apellido" id="apellido" class= "form-control" placeholder="Escriba los apellidos" required=""> 
                    {!! $errors->first('apellido', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Carrera:</label>
                       <select name="carrera" id="carrera">
                          <option value="ISTII">Ingenieria en Sistemas y Tecnologias de la Información Industrial</option>
                          <option value="IPGI">Ingeniería en Procesos y Gestión Industrial</option>
                          <option value="IAA">Ingeniería en Autotronica </option>
                        </select>  
                        {!! $errors->first('carrera', '<small>:message</small><br>') !!}                                    
            </div>

            <div class="form-group">
                <label>Correo Electronico:</label>
                       <input type="email" name="correo_electronico" id="correo_electronico" class="form-control" placeholder="Ej.:usuario@servidor.com" required="">
                       {!! $errors->first('correo_electronico', '<small>:message</small><br>') !!}
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
    <form action="{{route('borraralumno')}}" method="POST" id="deleteForm">
      @csrf
      @method('DELETE')
      <div class="modal-body">       
            <input type="hidden" name="_method" value="DELETE">
        <p>¿Estas seguro de borrar este registro? Esta acción no puede revertirse. Para asegurarse, vuelva a escribir la matricula del alumno. </p>

            <div class="form-group">
                <label>Matricula:</label>
                    <input type="text" name="matricula" id="matricula" class= "form-control" placeholder="Escriba la matricula" required="" pattern="[0-9]+">
                    {!! $errors->first('matricula', '<small>:message</small><br>') !!}
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
        <h4> Alumnos registrados</h4>
        <table id="alumnos" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Matricula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Carrera</th>
                <th>Correo Electronico</th>
                <th>Acciones</th>
            </tr>   
            </thead> 
            <tbody>
                @foreach($alumnos as $alumno)
                <tr>
                    <td>{{$alumno->matricula}}</td>
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$alumno->apellido}}</td>
                    <td>{{$alumno->carrera}}</td>
                    <td>{{$alumno->correo_electronico}}</td>
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

                var table= $('#alumnos').DataTable({
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

                        $('#matricula').val(data[0]);
                        $('#nombre').val(data[1]);
                        $('#apellido').val(data[2]);
                        $('#carrera').val(data[3]);
                        $('#correo_electronico').val(data[4]);

                        $('#editForm').attr('route', 'editaralumno', + data[0]);
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

                        $('#matricula').val(data[0]);

                        $('#deleteForm').attr('route', 'borraralumno', + data[0]);
                        $('#deleteModal').modal('show');
                    });
                    //end delete record 
                });
        </script>
@endsection
