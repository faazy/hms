@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-success" href="{{route('appointments.create')}}">
                        <i class="fas fa-plus"></i> Add User
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Department</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 130px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($users) > 0)
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->mobile}}</td>
                                        <td>{{$user->gender}}</td>
                                        <td>{{$user->dob}}</td>
                                        <td>{{$user->department}}</td>
                                        <td>{!! $user->address !!}</td>
                                        <td>{!! $user->status !!}</td>

                                        <td class="text-center">
                                            <div class="action_tools text-white">
                                                <a class="btn btn-info" href="{{route('users.show', 1)}}"><i
                                                        class="fas fa-eye"></i></a>
                                                <a class="btn btn-warning" href="{{route('users.edit', 1)}}"><i
                                                        class="fas fa-edit"></i></a>
                                                <a class="btn btn-danger" href="{{route('users.destroy', 1)}}"><i
                                                        class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Department</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
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
