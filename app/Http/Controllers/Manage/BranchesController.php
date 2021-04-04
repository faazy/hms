<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Branches";
        $branches = $this->getdata(50);

        return view('manage.branches.index', compact('title', 'branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Add Branch";
        return view('manage.branches._form', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect()->route('branches.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('branches.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit Branch";
        return view('manage.branches._form', compact('title'));
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
        return redirect()->route('branches.index');
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
        $branches = [];

        for ($i = 0; $i < $limit; $i++) {
            $branches[] = (object)[
                'name' => $faker->company,
                'phone' => $faker->phoneNumber,
                'hod' => $faker->name,
                'address' => $faker->address,
                'created_at' => $faker->date(),
            ];
        }

        return $branches;
    }
}
