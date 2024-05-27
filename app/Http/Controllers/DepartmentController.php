<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index(){
        // Fetch only the first 4 departments with their associated doctors
        $departments = Department::with('doctors')->get();
        return view('department.index',['departments' => $departments]);
    }

    public function create(){
        return view('department.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'image' => 'nullable|mimes:png,jpg,svg',
            'description' => 'nullable'
        ]);
        
        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/department/';
            $file->move($path, $filename);
        }

        $newDepartment = Department::create([
            'name' => $request->name,
            'image' => $path.$filename,
            'description' => $request->description
        ]);

        return redirect(route('department.index'));
    }

    public function edit(Department $department){
        return view('department.edit', ['department' => $department]);
    }
    
    public function update(Department $department, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'image' => 'nullable|mimes:png,jpg,svg',
            'description' => 'nullable'
        ]);

        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/department/';
            $file->move($path, $filename);
    
            if(File::exists($department->image)){
                File::delete($department->image);
            }
            $department->update([
                'name' => $request->name,
                'image' => $path.$filename,
                'description' => $request->description
            ]);
        } else {
            $department->update([
                'name' => $request->name,
                'description' => $request->description
            ]);
        }
        return redirect(route('department.index'))->with('success','Department updated successfully');
    }

    public function delete(Department $department){
        $department->doctors()->delete();
        if(File::exists($department->image)){
            File::delete($department->image);
        }
        $department->delete();
        return redirect(route('department.index'))->with('success','Department deleted successfully');
    }

    public function getDoctorsByDepartment(Department $department){
        $doctors = $department->doctors()->get(['id', 'name', 'designation', 'nmc_reg', 'image']); // Fetch doctors for the department
        return response()->json($doctors);
    }
}
?>