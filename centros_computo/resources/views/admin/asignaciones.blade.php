@extends('layouts.plantillabase')
@section('contenido')
<br></br>

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

<form action="{{route('altaAsignacion')}}" method="post">    
            @csrf
        <label><h5>Fecha:</h5></label>
            <select name="fecha">
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miercoles">Miércoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
            </select> 
            {!! $errors->first('fecha', '<small>:message</small><br>') !!}

        <label><h5>Laboratorio:</h5></label>
            <select name="laboratorio_lab_clave">
            @foreach($laboratorios as $item)
                <option value="{{$item->lab_clave}}">{{$item->nombre}}</option>
            @endforeach 
            </select>
            {!! $errors->first('laboratorio_lab_clave', '<small>:message</small><br>') !!}                      

        <label><h5>Periodo:</h5></label>
            <select name="periodo_id_periodo">
            @foreach($periodos as $item)
                <option value="{{$item->id_periodo}}">{{$item->nombre}}</option>
            @endforeach 
            </select>
            {!! $errors->first('periodo_id_periodo', '<small>:message</small><br>') !!}
        <table class="table table-striped table-bordered" style="width:100%">
            <tr>
            <div class="form-group">
                <td>
                <div class="form-group">
                <label><h5>Hora Inicio:</h5></label>
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
                </td>
                <td>
                <div class="form-group">
                <label><h5>Hora de termino:</h5></label>
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
                <td>
                <div class="form-group">
                <label><h5>Usuario:</h5></label>
                    <select name="id_usuario">
                        @foreach($usuarios as $item)
                            <option value="{{$item->id}}">{{$item->id}}</option>
                        @endforeach 
                    </select>
                    {!! $errors->first('id_usuario_fk', '<small>:message</small><br>') !!}
                </div>
                </td>
                </td>
            </div>
            </tr>
        </table>
</form>
@endsection
