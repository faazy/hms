<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Doctors";
        $doctors = $this->getdata(50);

        return view('manage.doctors.index', compact('title', 'doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add Doctor";
        return view('manage.doctors._form', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('doctors.index');
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
        return view('manage.doctors.show', compact('title','faker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit Doctor";
        return view('manage.doctors._form', compact('title'));
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
        $doctors = [];

        for ($i = 0; $i < $limit; $i++) {
            $doctors[] = (object)[
                'name' => $faker->name,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'dob' => $faker->date(),
                'mobile' => $faker->phoneNumber,
                'address' => $faker->address,
            ];
        }

        return $doctors;
    }
}
