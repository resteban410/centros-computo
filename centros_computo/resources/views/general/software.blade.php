@extends('layouts.plantillabase2')
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
        	<br></br>
            <table id="equisoft" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>No.Serie Equipo</th>
                    <th>Software</th>
                    <th>Laboratorio</th>
                </tr>   
                </thead> 
                <tbody>
                    @foreach($data as $dat)
                    <tr>
                        <td>{{$dat->no_serie}}</td>
                        <td>{{$dat->nombre}}</td>
                        <td>{{$dat->nombre_laboratorio}}</td>
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

                var table= $('#equisoft').DataTable({
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

