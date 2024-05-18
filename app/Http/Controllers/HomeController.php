<?php
namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Testimonial;
use App\Models\Package;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sitesettings = SiteSetting::all();
        $departments = Department::all();
        $doctors = Doctor::all();
        $testimonials = Testimonial::all();
        $packages = Package::all();
        $sliders = Slider::all();
        return view('master', compact('sitesettings', 'departments', 'doctors', 'testimonials', 'packages', 'sliders'));
    }
}
