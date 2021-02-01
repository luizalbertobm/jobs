<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\JobController;
use App\Models\Employee;
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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


// Employees
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.list');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::get('/employees/{employee}', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees');
Route::put('/employees', [EmployeeController::class, 'update'])->name('employees');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');

// Departments
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.list');
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::get('/departments/{department}', [DepartmentController::class, 'edit'])->name('departments.edit');
Route::post('/departments', [DepartmentController::class, 'store'])->name('departments');
Route::put('/departments', [DepartmentController::class, 'update'])->name('departments');
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

// Jobs
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.list');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::get('/jobs/{job}', [JobController::class, 'edit'])->name('jobs.edit');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs');
Route::put('/jobs', [JobController::class, 'update'])->name('jobs');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');

// Route::get('/employees', function () {
//     return view('employees');
// })->name('employees');

Route::get('/job-history', function () {
    return view('job-history');
})->name('job-history');
