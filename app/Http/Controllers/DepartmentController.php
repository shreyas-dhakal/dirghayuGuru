<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index(){
        $departments = Department::all();
        return view('department.index',['departments' => $departments]);
        
    }

    public function create(){
        return view('department.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'description' => 'nullable'
        ]);

        $newDepartment = Department::create($data);

        return redirect(route('department.index'));
    }

    public function edit(Department $department){
        return view('department.edit', ['department' => $department]);
    }
    
    public function update(Department $department, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'image' => 'nullable',
            'description' => 'nullable'
        ]);
        
        $department-> update($data);
        return redirect(route('department.index'))->with('success','Department updated successfully');

    }

    public function delete(Department $department){
        $department->delete();
        return redirect(route('department.index'))->with('success','Department deleted successfully');
    }
}
