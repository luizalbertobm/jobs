<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departments.list', [
            'departments' => Department::paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('departments.form', [
            'employees' => Employee::all('first_name', 'last_name', 'id')
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
        $rules = [
            'name' => 'required|min:3|max:30|unique:departments',
            'manager_id' => 'required'
        ];
        $feedback = [
            'manager_id.required' => 'You must select one manager'
        ];

        $request->validate($rules, $feedback);
        Department::create($request->all());
        return redirect()->route('departments.list')->with('success_message', 'Created successyfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('departments.form', [
            'employees' => Employee::all('first_name', 'last_name', 'id'),
            'department' => $department
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
            'name' => 'required|min:3|max:30',
            'manager_id' => 'required'
        ];
        $feedback = [
            'manager_id.required' => 'You must select one manager'
        ];

        $request->validate($rules, $feedback);
        $department = Department::find($request->id);
        $department->update($request->all());
        return redirect()->route('departments.list')->with('success_message', 'Updated successyfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Department $department)
    {
        $department->delete();
        return redirect()->back()->with('success_message', 'Created successyfully');
    }
}
