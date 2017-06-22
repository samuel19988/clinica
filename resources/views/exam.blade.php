@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div id='calendar' style="background-color: white"></div>

                <h2 class="sub-header">Examen</h2>
                <table class="table table-bordered" style="color: #1b6d85; font-weight: bold">
                    <tr>
                        <td>Nombre</td>
                        <td>{{$exam->nombre}}</td>
                    </tr>
                    <tr>
                        <td>Tipo</td>
                        <td>{{$exam->tipo}}</td>
                    </tr>
                    <tr>
                        <td>Descripcion</td>
                        <td>{{$exam->descripcion}}</td>
                    </tr>

                </table>
            </div>
        </div>
        <div class="row">
            <table id="Diagnosticos">
                <tr>
                    <td>Nombre</td>
                    <td>Descripción</td>
                    <td>-</td>
                </tr>
                @foreach($diagnostics as $diagnostic)
                    <tr>
                        <td>{{$diagnostic->nombre}}</td>
                        <td>{{$diagnostic->descripcion}}</td>
                        <td>{{$diagnostic->medicina}}</td>
                        <td><a href="/medicines/{{$medicine->id}}">ver medicinas</a></td>
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
            $('#Diagnosticos').DataTable();
        });
    </script>


@endsection
