<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function getAllEmployess() {
        $employees = Employee::with('departments')->get();
        return response()->json($employees);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'required'
        ]);

        $employee = Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        // return "sfasdfsdf";
        $employee->departments()->sync($request->department);
        return response()->json(['employee' => 'Data successfully added.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // echo $id;
        $employee = Employee::findOrFail($id);
        return response()->json($employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return $id;
        $employee = Employee::findOrFail($id);
        return response()->json($employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // print_r($request->all());
        $employee = Employee::findOrFail($id);
        $employee->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);
        // $employee->departments()->sync($request->department);
        return response()->json(['employee'=> 'Data successfully updated.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // return $id;
        // echo $id;
        $employee = Employee::findOrFail($id);
        $employee->departments()->detach();
        $employee->delete();
        return response()->json(['message' => 'Employee successfully deleted']);
    }
}
