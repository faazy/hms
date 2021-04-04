@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-success" href="{{route('branches.create')}}">
                        <i class="fas fa-plus"></i> Add Branch
                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Branch Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Branch Head</th>
                            <th>Created At</th>
                            <th class="text-center" style="width: 130px">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($branches) > 0)
                            @foreach($branches as $branch)
                                <tr>
                                    <td>{{$branch->name}}</td>
                                    <td>{{$branch->address}}</td>
                                    <td>{{$branch->phone}}</td>
                                    <td>{{$branch->hod}}</td>
                                    <td>{{$branch->created_at}}</td>
                                    <td class="text-center">
                                        <div class="action_tools text-white">
                                            <a class="btn btn-info"><i
                                                    class="fas fa-eye"></i></a>
                                            <a class="btn btn-warning" href="{{route('branches.edit', 1)}}"><i
                                                    class="fas fa-edit"></i></a>
                                            <a class="btn btn-danger" href="{{route('branches.destroy', 1)}}"><i
                                                    class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Branch Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Branch Head</th>
                            <th>Created At</th>
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
