@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-success" href="{{route('appointments.create')}}">
                        <i class="fas fa-plus"></i> Add Appointment
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Appointment ID</th>
                            <th>Patient ID</th>
                            <th>Patient Name</th>
                            <th>Patient Mobile</th>
                            <th>Token Number</th>
                            <th>Doctor Name</th>
                            <th>Problem</th>
                            <th>Status</th>
                            <th class="text-center" style="width: 130px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($appointments) > 0)
                            @foreach($appointments as $appointment)
                                <tr>
                                    <td>{{$appointment->appointment_id}}</td>
                                    <td>{{$appointment->patient_id}}</td>
                                    <td>{{$appointment->patient_name}}</td>
                                    <td>{{$appointment->phone}}</td>
                                    <td>{{$appointment->token}}</td>
                                    <td>{{$appointment->doctor}}</td>
                                    <td>{{$appointment->problem}}</td>
                                    <td>{!! $appointment->status !!}</td>

                                    <td class="text-center">
                                        <div class="action_tools text-white">
                                            <a class="btn btn-info" href="{{route('appointments.show', 1)}}"><i class="fas fa-eye"></i></a>
                                            <a class="btn btn-warning" href="{{route('appointments.edit', 1)}}"><i class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger"  href="{{route('appointments.destroy', 1)}}"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>DOB</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.col -->
    </div>
@stop

@section('js')
    <script type="text/javascript">
        $('#example1').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    </script>
@stop
