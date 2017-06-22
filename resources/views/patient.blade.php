@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div id='calendar' style="background-color: white"></div>

                <h2 class="sub-header">PACIENTES</h2>
                <table class="table table-bordered" style="color: #1b6d85; font-weight: bold">
                    <tr>
                        <td>RUT</td>
                        <td>{{$patient->rut}}</td>
                    </tr>
                    <tr>
                        <td>Nombre</td>
                        <td>{{$patient->nombre}}</td>
                    </tr>
                    <tr>
                        <td>Apellido</td>
                        <td>{{$patient->apellido}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$patient->email}}</td>
                    </tr>
                    <tr>
                        <td>Fecha De Nacimiento</td>
                        <td>{{$patient->fecha}}</td>
                    </tr>
                    <tr>
                        <td>Telefono</td>
                        <td>{{$patient->telefono}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <table id="Examenes">
                <tr>
                    <td>Nombre</td>
                    <td>Tipo</td>
                    <td>Descripción</td>
                    <td>-</td>
                </tr>
                @foreach($exams as $exam)
                    <tr>
                        <td>{{$exam->nombre}}</td>
                        <td>{{$exam->tipo}}</td>
                        <td>{{$exam->descripcion}}</td>
                        <td><a href="/exam/{{$exam->id}}">ver más</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
@section('css')
    <!-- Custom styles for this template -->
    <link href="/css/home.css" rel="stylesheet">
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('#Examenes').DataTable();
        });
    </script>


@endsection
