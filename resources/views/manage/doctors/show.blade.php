@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{asset('images/doctor.jpg')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Dr {{$faker->name}}</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique,
                                vero.</p>
                            <button type="button" class="btn btn-success"><span class="fas fa-edit"></span> Edit
                                Doctor
                            </button>
                            <button type="button" class="btn btn-danger"><span class="fas fa-trash-alt"></span> Delete
                                Doctor
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <td><strong>Specialization</strong></td>
                                <td>General Physician</td>
                            </tr>
                            <tr>
                                <td><strong>Experience</strong></td>
                                <td>{{$faker->randomNumber(2)}} Years</td>
                            </tr>
                            <tr>
                                <td><strong>Gender</strong></td>
                                <td>Male</td>
                            </tr>
                            <tr>
                                <td><strong>Address</strong></td>
                                <td>{{$faker->address}} </td>
                            </tr>
                            <tr>
                                <td><strong>Phone</strong></td>
                                <td>{{$faker->phoneNumber}}</td>
                            </tr>
                            <tr>
                                <td><strong>Date Of Birth</strong></td>
                                <td>{{$faker->date}}</td>
                            </tr>
                            <tr>
                                <td><strong>Email</strong></td>
                                <td>{{$faker->email}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="widget-area-2 proclinic-box-shadow">
                <h3 class="widget-title">Doctor Activity</h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Patient Name</th>
                            <th>Injury/Condition</th>
                            <th>Visit Date</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for ($i = 0; $i < 10; $i++)
                            <tr>
                                <td>{{$faker->name}}</td>
                                <td>{{$faker->randomElement(['Virus fever','Dengue','COVID-19 '])}}</td>
                                <td>{{$faker->date}}</td>
                                <td>{{$faker->randomElement(['Condition is good','Small Operation','Admintted '])}}</td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>

            <a class="btn btn-primary mb-5" href="{{route('doctors.index')}}"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
        </div>
    </div>
    </div>
@stop
