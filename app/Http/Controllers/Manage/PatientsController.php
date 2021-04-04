<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Patients";
        $patients = $this->getdata(50);

        return view('manage.patients.index', compact('title', 'patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = [];
        $title = "Add Patient";
        return view('manage.patients._form', compact('title', 'patients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('patients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $patients = [];

        for ($i = 0; $i < $limit; $i++) {
            $patients[] = (object)[
                'name' => $faker->name,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'dob' => $faker->date(),
                'mobile' => $faker->phoneNumber,
                'address' => $faker->address,
            ];
        }

        return $patients;
    }
}
