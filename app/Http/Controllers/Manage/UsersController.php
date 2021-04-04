<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Users";
        $users = $this->getdata(50);

        return view('manage.users.index', compact('title', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add User";
        return view('manage.users._form', compact('title'));
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
        $users = [];

        for ($i = 0; $i < $limit; $i++) {
            $users[] = (object)[
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'mobile' => $faker->phoneNumber,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'email' => $faker->email,
                'department' => $faker->randomElement(['Neuro', 'Ortho','General']),
                'dob' => $faker->date(),
                'address' => $faker->address,
                'status' => $faker->randomElement(['<label class="badge badge-success">Active</label>', '<label class="badge badge-warning">Inactive</label>']),
            ];
        }

        return $users;
    }
}
