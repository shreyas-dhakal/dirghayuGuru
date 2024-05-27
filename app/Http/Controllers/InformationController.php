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
        try {
            $data = $request->validate([
                'logo' => 'required',
                'footer' => 'required',
                'story_image' => 'required',
                'story1' => 'required',
                'story2' => 'required',
                'vision_image' => 'required',
                'vision' => 'required',
                'greeting_image' => 'required',
                'greeting' => 'required',
            ]);
            
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/informations/logo/';
            $file->move($path, $filename);

            $file1 = $request->file('story_image');
            $extension1 = $file1->getClientOriginalExtension();
            $filename1 = time().'2.'.$extension1;
            $path1 = 'uploads/informations/story_image/';
            $file1->move($path1, $filename1);

            $file2 = $request->file('vision_image');
            $extension2 = $file2->getClientOriginalExtension();
            $filename2 = time().'3.'.$extension2;
            $path2 = 'uploads/informations/vision_image/';
            $file2->move($path2, $filename2);

            $file3 = $request->file('greeting_image');
            $extension3 = $file3->getClientOriginalExtension();
            $filename3 = time().'4.'.$extension3;
            $path3 = 'uploads/informations/greeting_image/';
            $file3->move($path3, $filename3);

            $newInformation = Information::create([
                'logo' => $path.$filename,
                'footer' => $request->footer,
                'story_image' => $path1.$filename1,
                'story1' => $request->story1,
                'story2' => $request->story2,
                'vision_image' => $path2.$filename2,
                'vision' => $request->vision,
                'greeting_image' => $path3.$filename3,
                'greeting' => $request->greeting
            ]);

            return redirect(route('information.index'))->with('success','Information added successfully');
        } catch (\Illuminate\Http\Exceptions\PostTooLargeException $e) {
            // Handle the exception gracefully
            return redirect()->back()->withInput()->withErrors(['file' => 'The file size exceeds the maximum allowed size.']);
        }
    }
    public function edit(Information $information){
        return view('information.edit', ['information' => $information]);
    }
    
    public function update(Information $information, Request $request){
        $data = $request->validate([
            'footer' => 'required',
            'story1' => 'required',
            'story2' => 'required',
            'vision' => 'required',
            'greeting' => 'required',
        ]);
    
        $updateData = [
            'footer' => $request->footer,
            'story1' => $request->story1,
            'story2' => $request->story2,
            'vision' => $request->vision,
            'greeting' => $request->greeting
        ];
    
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/informations/logo/';
            $file->move($path, $filename);
            File::delete($information->logo);
            $updateData['logo'] = $path.$filename;
        }
    

        if ($request->hasFile('story_image')) {
            $file1 = $request->file('story_image');
            $extension1 = $file1->getClientOriginalExtension();
            $filename1 = time().'2.'.$extension1;
            $path1 = 'uploads/informations/story_image/';
            $file1->move($path1, $filename1);
            File::delete($information->story_image);
            $updateData['story_image'] = $path1.$filename1;
        }
    

        if ($request->hasFile('vision_image')) {
            $file2 = $request->file('vision_image');
            $extension2 = $file2->getClientOriginalExtension();
            $filename2 = time().'3.'.$extension2;
            $path2 = 'uploads/informations/vision_image/';
            $file2->move($path2, $filename2);
            File::delete($information->vision_image);
            $updateData['vision_image'] = $path2.$filename2;
        }
    
        if ($request->hasFile('greeting_image')) {
            $file3 = $request->file('greeting_image');
            $extension3 = $file3->getClientOriginalExtension();
            $filename3 = time().'4.'.$extension3;
            $path3 = 'uploads/informations/greeting_image/';
            $file3->move($path3, $filename3);
            File::delete($information->greeting_image);
            $updateData['greeting_image'] = $path3.$filename3;
        }
    
        $information->update($updateData);
    
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
