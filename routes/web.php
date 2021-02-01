<?php

use App\Http\Controllers\DepartmentController;
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

Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');

Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.list');
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('/departments', [DepartmentController::class, 'store'])->name('departments');
Route::put('/departments', [DepartmentController::class, 'update'])->name('departments');
Route::get('/departments/{department}', [DepartmentController::class, 'edit'])->name('departments.edit');
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

Route::get('/employees', function () {
    return view('employees');
})->name('employees');

Route::get('/job-history', function () {
    return view('job-history');
})->name('job-history');
