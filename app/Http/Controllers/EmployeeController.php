<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Job;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employees.list', [
            'entities' => Employee::paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.form', [
            'jobs' => Job::all(),
            'managers' => Employee::all(),
            'departments' => Department::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $rules = [
        //     'title' => 'required|min:3|max:30',
        //     'min_salary' => 'required|numeric|min:300',
        //     'max_salary' => 'required|numeric|max:5000',
        // ];

        // $request->validate($rules);
        Employee::create($request->all());
        return redirect()->route('employees.list')->with('success_message', 'Created successyfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('employees.form', [
            'employee' => $employee,
            'jobs' => Job::all(),
            'managers' => Employee::all(),
            'departments' => Department::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        // $rules = [
        //     'title' => 'required|min:3|max:30',
        //     'min_salary' => 'required|numeric|min:300',
        //     'max_salary' => 'required|numeric|max:5000',
        // ];

        // $request->validate($rules);
        $department = Employee::find($request->id);
        $department->update($request->all());
        return redirect()->route('employees.list')->with('success_message', 'Updated successyfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
