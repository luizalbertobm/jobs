<?php

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
    return view('welcome');
});

Route::get('/test', function () {
    return view('jobs');
})->name('main');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');

Route::get('/departments', function () {
    return view('departments');
})->name('departments');

Route::get('/employees', function () {
    return view('employees');
})->name('employees');

Route::get('/job-history', function () {
    return view('job-history');
})->name('job-history');
