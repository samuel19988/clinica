@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">Doctors: <span class="sr-only">(current)</span></a></li>
                    <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i>Samuel Muñoz</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i>Sofia Muñoz</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i>Sebastian Montoya</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o" aria-hidden="true"></i>Josefina Vitulich</a></li>

                </ul>

            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <div id='calendar' style="background-color: white"></div>

                <h2 class="sub-header">PACIENTES</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Rut</th>
                            <th>Fecha</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            <th>Fecha Creación</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patients as $patient)
                            <tr>
                                <td><a href="/patients/{{$patient->id}}" class="btn btn-default">{{$patient->nombre}}</a></td>
                                <td>{{$patient->apellido}}</td>
                                <td>{{$patient->rut}}</td>
                                <td>{{$patient->fecha}}</td>
                                <td>{{$patient->email}}</td>
                                <td>{{$patient->telefono}}</td>
                                <td>{{Carbon\Carbon::parse($patient->created_at)->diffForHumans()}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{$patients->links()}}
            </div>
        </div>
    </div>
@endsection
@section('css')
    <!-- Custom styles for this template -->
    <link href="/css/home.css" rel="stylesheet">
@endsection
@section('js')
    <script>

        $(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: '2017-05-12',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many event
                locale:'es',
                defaultView: 'agendaWeek',
                minTime: "08:00:00",
                maxTime: "20:00:00",
                events: [
                    {
                        title: '',
                        start: '2017-05-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2017-05-07',
                        end: '2017-05-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2017-05-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2017-05-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2017-05-11',
                        end: '2017-05-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2017-05-12T10:30:00',
                        end: '2017-05-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2017-05-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2017-05-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2017-05-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2017-05-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2017-05-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2017-05-28'
                    }
                ]
            });

        });

    </script>
@endsection
