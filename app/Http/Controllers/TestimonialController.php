<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials = testimonial::all();
        return view('testimonial.index',['testimonials' => $testimonials]);
        
    }

    public function create(){
        return view('testimonial.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'designation' => 'required',
            'image' => 'nullable'
        ]);

        $newtestimonial = testimonial::create($data);

        return redirect(route('testimonial.index'));
    }

    public function edit(Testimonial $testimonial){
        return view('testimonial.edit', ['testimonial' => $testimonial]);
    }
    
    public function update(Testimonial $testimonial, Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'designation' => 'required',
            'image' => 'nullable'
        ]);
        
        $testimonial->update($data);
        return redirect(route('testimonial.index'))->with('success','Testimonial updated successfully');
    }

    public function delete(Testimonial $testimonial){
        $testimonial->delete(); // Delete testimonial
        return redirect(route('testimonial.index'))->with('success','Testimonial deleted successfully');
    }
}
