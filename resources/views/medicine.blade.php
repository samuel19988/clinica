@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div id='calendar' style="background-color: white"></div>

                <h2 class="sub-header">Medicinas</h2>
                <table class="table table-bordered" style="color: #1b6d85; font-weight: bold">
                    <tr>
                        <td>Nombre</td>
                        <td>{{$medicine->nombre}}</td>
                    </tr>
                    <tr>
                        <td>Descripción</td>
                        <td>{{$medicine->descripcion}}</td>
                    </tr>
                    <tr>


                </table>
            </div>
        </div>

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
