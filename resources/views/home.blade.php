@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <tr>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Especialidad</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->rol}}</td>
                    <td>{{$user->especialidad}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
