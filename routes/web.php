<?php

use App\Http\Controllers\Manage\AppointmentsController;
use App\Http\Controllers\Manage\BranchesController;
use App\Http\Controllers\Manage\DepartmentsController;
use App\Http\Controllers\Manage\DoctorsController;
use App\Http\Controllers\Manage\PatientsController;
use App\Http\Controllers\Manage\UsersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'manage'], function () {
    //Patients
    Route::resource('/patients', PatientsController::class);
    //Doctors
    Route::resource('/doctors', DoctorsController::class);
    //Branches
    Route::resource('/branches', BranchesController::class);
    //Departments
    Route::resource('/departments', DepartmentsController::class);
    //Appointments
    Route::resource('/appointments', AppointmentsController::class);

    //Users
    Route::resource('/users', UsersController::class);
});
