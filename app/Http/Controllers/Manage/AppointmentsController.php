<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Appointments";
        $appointments = $this->getdata(50);

        return view('manage.appointments.index', compact('title', 'appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add Aappointment";
        return view('manage.appointments._form', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('appointments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Doctor Details";
        $faker = \Faker\Factory::create();
        return view('manage.appointments.show', compact('title','faker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit Appointment";
        return view('manage.appointments._form', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /**
     * Fake Data Generate
     *
     * @param int $limit
     * @return array
     */
    protected function getdata($limit = 50): array
    {
        $faker = \Faker\Factory::create();
        $appointments = [];

        for ($i = 0; $i < $limit; $i++) {
            $appointments[] = (object)[
                'appointment_id' => $faker->randomDigit(),
                'patient_id' => $faker->randomDigit(),
                'patient_name' => $faker->name,
                'phone' => $faker->randomElement(['Male', 'Female']),
                'token' => $faker->randomNumber(),
                'doctor' => $faker->name('female'),
                'problem' => $faker->realText(100),
                'status' => $faker->randomElement(['<label class="badge badge-success">Active</label>', '<label class="badge badge-warning">Pending</label>']),
            ];
        }

        return $appointments;
    }
}
