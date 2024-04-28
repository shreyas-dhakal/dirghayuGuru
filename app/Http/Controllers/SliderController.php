<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index(){
        $sliders = slider::all();
        return view('slider.index',['sliders' => $sliders]);
        
    }

    public function create(){
        return view('slider.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable'
        ]);

        $newslider = Slider::create($data);

        return redirect(route('slider.index'));
    }

    public function edit(Slider $slider){
        return view('slider.edit', ['slider' => $slider]);
    }
    
    public function update(Slider $slider, Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable'
        ]);
        
        $slider->update($data);
        return redirect(route('slider.index'))->with('success','Slider updated successfully');
    }

    public function delete(Slider $slider){
        $slider->delete(); // Delete slider
        return redirect(route('slider.index'))->with('success','Slider deleted successfully');
    }
}
