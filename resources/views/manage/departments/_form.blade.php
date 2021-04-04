@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form class="form" action="{{route('departments.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="Doctor-name">Department Name</label>
                            <input type="text" class="form-control" placeholder="Department name" id="Department-name">
                        </div>
                        <div class="form-group">
                            <label for="dob">Description</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> Submit</button>
                            <a class="btn btn-danger btn-lg text-white"><i class="fas fa-times"></i> Reset</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
