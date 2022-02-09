@extends('layouts.plantillabase')
@section('contenido')

<br></br>

<!-- Modal Crear nuevo alumno-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo registro</h5>
      </div>
    <form action="{{route('altaAde')}}" method="post">
      <div class="modal-body">       
                @csrf
            <div class="form-group">
                <label>Folio:</label>
                    <input type="text" name="folio" class= "form-control" placeholder="Asignado automaticamente" readonly>
            </div>

      			<div class="form-group">
                <label>Fecha:</label>
                    <input type="date" name="fecha" id="fecha" class= "form-control" required="">
                    {!! $errors->first('fecha', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Hora:</label>
                    <input type="time" name="hora" class="form-control" required="">
                    {!! $errors->first('hora', '<small>:message</small><br>') !!}
            </div>

			      <label>Descripcion:</label>
            <div class="form-group">                
                    <textarea name="descripcion" rows="5" cols="40"></textarea>
                    {!! $errors->first('descripcion', '<small>:message</small><br>') !!}
            </div>


            <label>Estado:</label>
            <div class="form-group">
                
                       <select name="estado">
                       	  <option value="resuelto">Resuelto</option>
                       	  <option value="espera">En espera</option>
                        </select>
                        {!! $errors->first('estado', '<small>:message</small><br>') !!}                      
            </div>

            <label>Equipo:</label>
            <div class="form-group">
                
                       <select name="noserie_equipo">
                       	@foreach($equipos as $item)
                       	  <option value="{{$item->no_serie}}">{{$item->no_serie}}
                       	  </option>
                       	@endforeach 
                        </select>   
                        {!! $errors->first('noserie_equipo', '<small>:message</small><br>') !!}                   
            </div>

            <label>Alumno:</label>
            <div class="form-group">
                
                       <select name="matricula_alumno_matricula">
                       	@foreach($alumnos as $item)
                       	  <option value="{{$item->matricula}}">{{$item->nombre, $item->apellido}}
                       	  </option>
                       	@endforeach 
                        </select>
                        {!! $errors->first('matricula_alumno_matricula', '<small>:message</small><br>') !!}                      
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
<!-- Termina modal de nuevo alumno -->

<!-- Empieza modal de editar alumno -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Editar registro</h5>
      </div>
    <form action="{{route('editarAde')}}" method="post" id="editForm">
      <div class="modal-body">       
                @csrf
                @method('PUT')
            <div class="form-group">
                <label>Folio:</label>
                    <input type="text" name="folio" id="folio" class= "form-control" placeholder="Asignado automaticamente" readonly>
            </div>

            <div class="form-group">
                <label>Fecha:</label>
                    <input type="text" name="fecha "id="fecha" required=""></p>
                    {!! $errors->first('fecha', '<small>:message</small><br>') !!}
            </div>

            <div class="form-group">
                <label>Hora:</label>
                    <input type="time" name="hora" id="hora" class= "form-control" required="">
                    {!! $errors->first('hora', '<small>:message</small><br>') !!}
            </div>

            <label>Descripcion:</label>
            <div class="form-group">                
                    <textarea name="descripcion" id="descripcion" rows="5" cols="40" required=""></textarea>
                    {!! $errors->first('descripcion', '<small>:message</small><br>') !!}
            </div>


            <label>Estado:</label>
            <div class="form-group">
                
                       <select name="estado">
                       	  <option value="resuelto">Resuelto</option>
                       	  <option value="espera">En espera</option>
                        </select>
                        {!! $errors->first('estado', '<small>:message</small><br>') !!}                      
            </div>

            <label>Equipo:</label>
            <div class="form-group">
                
                       <select name="noserie_equipo">
                       	@foreach($equipos as $item)
                       	  <option value="{{$item->no_serie}}">{{$item->no_serie}}
                       	  </option>
                       	@endforeach 
                        </select> 
                        {!! $errors->first('noserie_equipo', '<small>:message</small><br>') !!}                     
            </div>

            <label>Alumno:</label>
            <div class="form-group">
                
                       <select name="matricula_alumno_matricula">
                       	@foreach($alumnos as $item)
                       	  <option value="{{$item->matricula}}">{{$item->nombre, $item->apellido}}
                       	  </option>
                       	@endforeach 
                        </select>    
                        {!! $errors->first('matricula_alumno_matricula', '<small>:message</small><br>') !!}                   
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
    <form action="{{route('borrarAde')}}" method="POST" id="deleteForm">
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

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar nuevo registro
    </button>
</div>

<br></br>
<div class="card"> 
        <div class="card-body">
        <h4> Historial de Adeudos</h4>
        <table id="adeudos" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Folio</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Matricula Alumno</th>
                <th>No.Serie Equipo</th>
                <th>Acciones</th>
            </tr>   
            </thead> 
            <tbody>
                @foreach($adeudos as $adeudo)
                <tr>
                    <td>{{$adeudo->folio}}</td>
                    <td>{{$adeudo->fecha}}</td>
                    <td>{{$adeudo->hora}}</td>
                    <td>{{$adeudo->descripcion}}</td>
                    <td>{{$adeudo->estado}}</td>
                    <td>{{$adeudo->matricula_alumno_matricula}}</td>
                    <td>{{$adeudo->noserie_equipo}}</td>
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

                var table= $('#adeudos').DataTable({
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
                        $('#fecha').val(data[1]);
                        $('#hora').val(data[2]);
                        $('#descripcion').val(data[3]);
                        $('#estado').val(data[4]);
                        $('#matricula_alumno_matricula').val(data[5]);
                        $('#noserie_equipo').val(data[6]);
                 
                        $('#editForm').attr('route', 'editarAde', + data[0]);
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

                        $('#deleteForm').attr('route', 'borrarAde', + data[0]);
                        $('#deleteModal').modal('show');
                    });
                    //end delete record 
                });
        </script>
@endsection