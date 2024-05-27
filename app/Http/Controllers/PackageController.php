<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function index(){
        $packages = package::all();
        return view('package.index',['packages' => $packages]);
        
    }

    public function create(){
        return view('package.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'field_1' => 'nullable',
            'field_2' => 'nullable',
            'field_3' => 'nullable',
            'field_4' => 'nullable',
            'field_5' => 'nullable',
            'field_6' => 'nullable',
            'field_7' => 'nullable',
            'field_8' => 'nullable',
            'field_9' => 'nullable',
            'field_10' => 'nullable',

        ]);


        $newpackage = Package::create($data);
        return redirect(route('package.index'));
    }

    public function edit(Package $package){
        return view('package.edit', ['package' => $package]);
    }
    
    public function update(Package $package, Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'field_1' => 'nullable',
            'field_2' => 'nullable',
            'field_3' => 'nullable',
            'field_4' => 'nullable',
            'field_5' => 'nullable',
            'field_6' => 'nullable',
            'field_7' => 'nullable',
            'field_8' => 'nullable',
            'field_9' => 'nullable',
            'field_10' => 'nullable',
        ]);
        
        $package->update($data);
        return redirect(route('package.index'))->with('success','Package updated successfully');
    }

    public function delete(Package $package){
        $package->delete(); // Delete package
        return redirect(route('package.index'))->with('success','Package deleted successfully');
    }
}
