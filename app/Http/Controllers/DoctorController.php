<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Department;
use Illuminate\Support\Facades\File;

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
            'image' => 'nullable|mimes:png,jpg,svg',
            'description' => 'nullable',
            'nmc_reg' => 'required',
            'department_id' => 'nullable' // Change 'department' to 'department_id'
        ]);

        if($request->has('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/doctor/';
            $file -> move($path ,$filename);
        }

        $newDoctor = Doctor::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $path.$filename,
            'description' => $request->description,
            'nmc_reg' => $request->nmc_reg,
            'department_id' => $request->department_id
        ]);

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
            'image' => 'nullable|mimes:png,jpg,svg',
            'description' => 'nullable',
            'nmc_reg' => 'required',
            'department_id' => 'nullable' // Change 'department' to 'department_id'
        ]);
        
        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/doctor/';
            $file->move($path, $filename);
    
            if(File::exists($doctor->image)){
                File::delete($doctor->image);
            }
            $department->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'image' => $path.$filename,
                'description' => $request->description,
                'nmc_reg' => $request->nmc_reg,
                'department_id' => $request->department_id
            ]);
        } else {
            $department->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'description' => $request->description,
                'nmc_reg' => $request->nmc_reg,
                'department_id' => $request->department_id
            ]);

        return redirect(route('doctor.index'))->with('success','Doctor updated successfully');
    }
}

    public function delete(Doctor $doctor){
        if(File::exists($doctor->image)){
            File::delete($doctor->image);
        }
        $doctor->delete();
        return redirect(route('doctor.index'))->with('success','Doctor deleted successfully');
    }
    
    public function getDoctorsByDepartment($departmentId)
    {
        $doctors = Doctor::where('department_id', $departmentId)->get();
        return response()->json($doctors);
    }
}
