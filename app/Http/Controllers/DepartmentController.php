<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function index() {
        $department = Department::all();
        return response()->json($department);
    }


    public function store(Request $request) {
        // echo "<pre>";
        // print_r($request->all());

        $department = Department::create($request->all());
        return response()->json(['department' => 'Department added successfully.']);

    }
}
