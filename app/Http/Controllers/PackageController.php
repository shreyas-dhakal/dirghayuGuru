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
            'price' => 'required'
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
            'price' => 'required'
        ]);
        
        $package->update($data);
        return redirect(route('package.index'))->with('success','Package updated successfully');
    }

    public function delete(Package $package){
        // Before deleting the package, you may want to handle the related doctors
        $package->doctors()->delete(); // Delete related doctors
        $package->delete(); // Delete package
        return redirect(route('package.index'))->with('success','Package deleted successfully');
    }
}
