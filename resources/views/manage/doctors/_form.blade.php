@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form class="form" action="{{route('doctors.store')}}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Doctor-name">Doctor Name</label>
                                <input type="text" class="form-control" placeholder="Doctor name" id="Doctor-name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" placeholder="Date of Birth" class="form-control" id="dob">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="specialization">Specialization</label>
                                <input type="text" placeholder="Specialization" class="form-control"
                                       id="specialization">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="experience">Experience</label>
                                <input type="text" placeholder="Experience" class="form-control" id="experience">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="age">Age</label>
                                <input type="text" placeholder="Age" class="form-control" id="age">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" placeholder="Phone" class="form-control" id="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" placeholder="email" class="form-control" id="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">Gender</label>
                                <select class="form-control" id="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="about-doctor">Doctor Details</label>
                                <textarea placeholder="Doctor Details" class="form-control" id="about-doctor"
                                          rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <textarea placeholder="Address" class="form-control" id="address" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="file">File</label>
                                <input type="file" class="form-control" id="file">
                            </div>

                            <div class="form-check col-md-12 mb-2">
                                <div class="text-left">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="ex-check-2">
                                        <label class="custom-control-label" for="ex-check-2">Please Confirm</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
