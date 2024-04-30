<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Department; // Import Department model

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::with('department')->get(); // Eager load department relationship
        return view('doctor.index',['doctors' => $doctors]);
        
    }

    public function create(){
        $departments = Department::all(); // Fetch all departments for the dropdown
        return view('doctor.create', ['departments' => $departments]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'nullable',
            'description' => 'nullable',
            'department_id' => 'nullable' // Change 'department' to 'department_id'
        ]);

        $newDoctor = Doctor::create($data);

        return redirect(route('doctor.index'));
    }

    public function edit(Doctor $doctor){
        $departments = Department::all(); // Fetch all departments for the dropdown
        return view('doctor.edit', ['doctor' => $doctor, 'departments' => $departments]);
    }
    
    public function update(Doctor $doctor, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image' => 'nullable',
            'description' => 'nullable',
            'department_id' => 'nullable' // Change 'department' to 'department_id'
        ]);
        
        $doctor->update($data);
        return redirect(route('doctor.index'))->with('success','Doctor updated successfully');
    }

    public function delete(Doctor $doctor){
        $doctor->delete();
        return redirect(route('doctor.index'))->with('success','Doctor deleted successfully');
    }
    
    public function getDoctorsByDepartment($departmentId)
    {
        $doctors = Doctor::where('department_id', $departmentId)->get();
        return response()->json($doctors);
    }
}
