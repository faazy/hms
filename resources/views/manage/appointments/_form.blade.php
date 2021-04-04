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
                                <label for="patient-name">Patient ID</label>
                                <input type="text" class="form-control" placeholder="Patient ID" id="patient-id">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="department">Department</label>
                                <select class="form-control" id="department">
                                    <option>Neuro</option>
                                    <option>Ortho</option>
                                    <option>General</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="doctor-name">Doctor Name</label>
                                <input type="text" placeholder="Doctor Name" class="form-control" id="doctor-name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="appointment-date">Appointment Date</label>
                                <input type="date" placeholder="Appointment Date" class="form-control" id="appointment-date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="time-slot">Time Slot</label>
                                <select class="form-control" id="time-slot">
                                    <option>10AM-11AM</option>
                                    <option>11AM-12pm</option>
                                    <option>12PM-01PM</option>
                                    <option>2PM-3PM</option>
                                    <option>3PM-4PM</option>
                                    <option>4PM-5PM</option>
                                    <option>6PM-7PM</option>
                                    <option>7PM-8PM</option>
                                    <option>8PM-9PM</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="token-number">Token Number <small>(Auto Generated)</small></label>
                                <input type="text" placeholder="Token Number" class="form-control" id="token-number">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="problem">Problem</label>
                                <textarea placeholder="Problem" class="form-control" id="problem" rows="3"></textarea>
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
