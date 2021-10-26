@extends('layouts.plantillabase3')
@section('contenido')
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
        <h4> Historial de Adeudos</h4>
        <table id="adeudos" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th>Folio</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Estado</th>
                <th>Matricula Alumno</th>
                <th>No.Serie Equipo</th>
            </tr>   
            </thead> 
            <tbody>
                @foreach($adeudos as $adeudo)
                <tr>
                    <td>{{$adeudo->folio}}</td>
                    <td>{{$adeudo->fecha}}</td>
                    <td>{{$adeudo->hora}}</td>
                    <td>{{$adeudo->estado}}</td>
                    <td>{{$adeudo->matricula_alumno_matricula}}</td>
                    <td>{{$adeudo->noserie_equipo}}</td>
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
        });
    </script>
@endsection