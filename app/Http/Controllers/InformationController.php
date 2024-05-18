<?php

namespace App\Http\Controllers;
use App\Models\Information;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InformationController extends Controller
{
    public function index(){
        $informations = information::all();
        return view('information.index',['informations' => $informations]);
        
    }

    public function create(){
        return view('information.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'logo' => 'required',
            'footer' => 'required',
            'story_image' => 'required',
            'story' => 'required',
            'vision_image' => 'required',
            'vision' => 'required',
            'greeting_image' => 'required',
            'greeting' => 'required',
        ]);
        $file = $request->file('logo');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $path = 'uploads/informations/logo/';
        $file -> move($path ,$filename);

        $file1 = $request->file('story_image');
        $extension1 = $file1->getClientOriginalExtension();
        $filename1 = time().'2.'.$extension1;
        $path1 = 'uploads/informations/story_image/';
        $file1 -> move($path1 ,$filename1);

        $file2 = $request->file('vision_image');
        $extension2 = $file2->getClientOriginalExtension();
        $filename2 = time().'3.'.$extension2;
        $path2 = 'uploads/informations/vision_image/';
        $file2 -> move($path2 ,$filename2);

        $file3 = $request->file('greeting_image');
        $extension3 = $file3->getClientOriginalExtension();
        $filename3 = time().'4.'.$extension3;
        $path3 = 'uploads/informations/greeting_image/';
        $file3 -> move($path3 ,$filename3);

        $newInformation = Information::create([
            'logo' => $path.$filename,
            'footer' => $request->footer,
            'story_image' => $path1.$filename1,
            'story' => $request->story,
            'vision_image' => $path2.$filename2,
            'vision' => $request->vision,
            'greeting_image' => $path3.$filename3,
            'greeting' => $request->greeting
        ]);

        return redirect(route('information.index'));
    }

    public function edit(Information $information){
        return view('information.edit', ['information' => $information]);
    }
    
    public function update(Information $information, Request $request){
        $data = $request->validate([
            'logo' => 'required|mimes:png,jpg,svg',
            'footer' => 'required',
            'story_image' => 'required|mimes:png,jpg,svg',
            'story' => 'required',
            'vision_image' => 'required|mimes:png,jpg,svg',
            'vision' => 'required',
            'greeting_image' => 'required|mimes:png,jpg,svg',
            'greeting' => 'required',
        ]);

        $file = $request->file('logo');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $path = 'uploads/informations/logo/';
        $file->move($path, $filename);
        File::delete($information->logo);

        $file1 = $request->file('story_image');
        $extension1 = $file1->getClientOriginalExtension();
        $filename1 = time().'2.'.$extension1;
        $path1 = 'uploads/informations/story_image/';
        $file1 -> move($path1 ,$filename1);
        File::delete($information->story_image);

        $file2 = $request->file('vision_image');
        $extension2 = $file2->getClientOriginalExtension();
        $filename2 = time().'3.'.$extension2;
        $path2 = 'uploads/informations/vision_image/';
        $file2 -> move($path2 ,$filename2);
        File::delete($information->vision_image);

        $file3 = $request->file('greeting_image');
        $extension3 = $file3->getClientOriginalExtension();
        $filename3 = time().'4.'.$extension3;
        $path3 = 'uploads/informations/greeting_image/';
        $file3 -> move($path3 ,$filename3);
        File::delete($information->greeting_image);

        $department->update([
                'logo' => $path.$filename,
                'footer' => $request->footer,
                'story_image' =>$path1.$filename1,
                'story' => $request->story,
                'vision_image' => $path2.$filename2,
                'vision' => $request->vision,
                'greeting_image' => $path3.$filename3,
                'greeting' => $request->greeting
                
        ]);
        return redirect(route('information.index'))->with('success','Information updated successfully');
    }

    public function delete(Information $information){
        File::delete($information->logo);
        File::delete($information->story_image);
        File::delete($information->vision_image);
        File::delete($information->greeting_image);
        $information->delete(); // Delete information
        return redirect(route('information.index'))->with('success','Information deleted successfully');
    }
}
