@extends('layouts.plantillabase')
@section('contenido')
<br></br>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('altaAsignacion')}}" method="post">    
        <div class="modal-body"> 
                @csrf                     
                    <div class="form-group">
                        <label><h5>Laboratorio: </h5></label>
                        <select name="laboratorio_lab_clave">
                        @foreach($laboratorios as $item)
                            <option value="{{$item->lab_clave}}">{{$item->nombre_laboratorio}}</option>
                        @endforeach 
                        </select>
                        {!! $errors->first('laboratorio_lab_clave', '<small>:message</small><br>') !!}
                    </div>

                    <div class="form-group">
                        <label><h5>Periodo: </h5></label>
                            <select name="periodo_id_periodo">
                            @foreach($periodos as $item)
                                <option value="{{$item->id_periodo}}">{{$item->nombre_periodo}}</option>
                            @endforeach 
                            </select>
                            {!! $errors->first('periodo_id_periodo', '<small>:message</small><br>') !!}
                    </div>

                    <div class="form-group">
                    <label><h5>Día: </h5></label>
                        <select name="dia">
                            <option value="0">Lunes</option>
                            <option value="1">Martes</option>
                            <option value="2">Miercoles</option>
                            <option value="3">Jueves</option>
                            <option value="4">Viernes</option>
                        </select> 
                        {!! $errors->first('dia', '<small>:message</small><br>') !!}
                    </div>

                    <div class="form-group">
                    <label><h5>Hora Inicio: </h5></label>
                        <select name="hora_inicio">
                            <option value="8:00">8:00am</option>
                            <option value="9:00">9:00am</option>
                            <option value="10:00">10:00am</option>
                            <option value="11:00">11:00am</option>
                            <option value="12:00">12:00am</option>
                            <option value="13:00">1:00pm</option>
                            <option value="14:00">2:00pm</option>
                            <option value="15:00">3:00pm</option>
                        </select> 
                        {!! $errors->first('hora_inicio', '<small>:message</small><br>') !!}
                    </div>

                    
                    <div class="form-group">
                    <label><h5>Hora de termino: </h5></label>
                        <select name="hora_termino">
                            <option value="8:00">8:00am</option>
                            <option value="9:00">9:00am</option>
                            <option value="10:00">10:00am</option>
                            <option value="11:00">11:00am</option>
                            <option value="12:00">12:00am</option>
                            <option value="13:00">1:00pm</option>
                            <option value="14:00">2:00pm</option>
                            <option value="15:00">3:00pm</option>
                        </select> 
                        {!! $errors->first('hora_termino', '<small>:message</small><br>') !!}
                    </div>

                    
                    <div class="form-group">
                        <label><h5>Usuario: </h5></label>
                            <select name="id_usuario">
                                @foreach($usuarios as $item)
                                    <option value="{{$item->id}}">{{$item->id}}</option>
                                @endforeach 
                            </select>
                            {!! $errors->first('id_usuario', '<small>:message</small><br>') !!}
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
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal">
        Eliminar registro
    </button>
</div>

<br></br>
<div class="card"> 
    <div class="card-body">
        <h4>Asignaciones Registradas</h4>
        <table id="asignaciones" class="table table-striped table-bordered" style="width:50%">
            <thead>
                <tr>
                    <th>ID Asignación / Periodo</th>
                    <th>Fecha</th>
                    <th>Horario</th>
                    <th>Usuario</th>
                    <th>Laboratorio</th>
                </tr>   
            </thead> 
            <tbody>
                @foreach($data as $dat)
                <tr>
                    <td>{{$dat->num_asignacion}} - {{$dat->nombre_periodo}}</td>
                    <td>{{$dat->fecha}}</td>
                    <td>{{$dat->hora_inicio}}hrs - {{$dat->hora_termino}}hrs</td>
                    <td>{{$dat->nombre_usuario}}</td>
                    <td>{{$dat->nombre_laboratorio}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>periodo</th>
                    <th>fecha</th>
                    <th>horario</th>
                    <th>usuario</th>
                    <th>laboratorio</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    <form action="{{route('borrarAsignacion')}}" method="POST" id="deleteForm">
      @csrf
      @method('DELETE')
      <div class="modal-body">
        <input type="hidden" name="_method" value="DELETE">
            <div class="form-group">
                <p>Localiza el ID del registro de asignación a eliminar, escribelo en el campo de texto y presiona el botón. </p>
                <label>ID Asignación: </label>
                <input type="text" name="num_asignacion" id="num_asignacion" class= "form-control" placeholder="Escriba el ID de asignación">
                {!! $errors->first('num_asignacion', '<small>:message</small><br>') !!}      
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
@endsection

@section('editarborrar')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#asignaciones tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Buscar '+title+'" />' );
            });

            var table= $('#asignaciones').DataTable({
                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;
            
                        $( 'input', this.footer() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                },
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
        });
    </script>
@endsection
