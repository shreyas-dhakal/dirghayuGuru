<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Testimonial;
use App\Models\Package;
use App\Models\Slider;
use App\Models\Information;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentConfirmation;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::paginate(10);

        return view('appointment.index', ['appointments' => $appointments]);
    }

    public function create()
    {   $sitesettings = SiteSetting::first();
        $departments = Department::all();
        $doctors = Doctor::all();
        $testimonials = Testimonial::all();
        $packages = Package::all();
        $sliders = Slider::all();
        $informations = Information::first();
        return view('appointment.create', compact('sitesettings', 'departments', 'doctors', 'testimonials', 'packages', 'sliders','informations'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'department' => 'required|exists:departments,id',
            'doctor' => 'required|exists:doctors,id',
        ]);

        $department = Department::findOrFail($request->input('department'));
        $doctor = Doctor::findOrFail($request->input('doctor'));

        $newAppointment = Appointment::create([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'department_id' => $department->id,
            'doctor_id' => $doctor->id,
            'confirmation_token' => Str::random(40),
        ]);
    
        // Send confirmation email
        Mail::to($data['email'])->send(new AppointmentConfirmation([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'department' => $department,
            'doctor' => $doctor,
        ]));

        $sitesettings = SiteSetting::first();
        $departments = Department::all();
        $doctors = Doctor::all();
        $testimonials = Testimonial::all();
        $packages = Package::all();
        $sliders = Slider::all();
        $informations = Information::first();
        return view('appointment.finish', compact('sitesettings', 'departments', 'doctors', 'testimonials', 'packages', 'sliders', 'informations'));

    }

    public function archive($id)
    {
        $appointment = Appointment::findOrFail($id);
        $createdAt = Carbon::parse($appointment->created_at)->toDateTimeString();
        unset($appointment['created_at']);
        unset($appointment['updated_at']);
        $appointmentData = $appointment->toArray();
    
        \DB::table('old_appointments')->insert(array_merge($appointmentData, ['appointment_date' => $createdAt]));

        $appointment->delete();
        
        return redirect()->back()->with('success', 'Appointment archived successfully.');
    }
}
