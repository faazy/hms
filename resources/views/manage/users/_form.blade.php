@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="form" action="{{route('users.store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="patient-name">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" id="patient-id">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="patient-name">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" id="patient-id">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Gender">Gender</label>
                                <select class="form-control" id="Gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="patient-name">Mobile</label>
                                <input type="text" class="form-control" placeholder="Mobile Number" id="patient-id">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="doctor-name">Password</label>
                                <input type="password" placeholder="Enter Password" class="form-control"
                                       id="doctor-name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="doctor-name">Confirm Password</label>
                                <input type="password" placeholder="Re-enter Password" class="form-control"
                                       id="doctor-name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="appointment-date">Email</label>
                                <input type="email" placeholder="Enter valid Email" class="form-control"
                                       id="appointment-date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="time-slot">Department</label>
                                <select class="form-control" id="department">
                                    <option>Neuro</option>
                                    <option>Ortho</option>
                                    <option>General</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="token-number">Date of Birth</label>
                                <input type="date" placeholder="Date of Birth" class="form-control" id="token-number">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlTextarea1">Address</label>
                                <textarea placeholder="Address" class="form-control" id="exampleFormControlTextarea1"
                                          rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-save"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
