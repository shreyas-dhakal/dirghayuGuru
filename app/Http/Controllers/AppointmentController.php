<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentConfirmation;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all(); // Fetch all appointments

        return view('appointment.index', ['appointments' => $appointments]);
    }

    public function create()
    {
        $departments = Department::all(); // Fetch all departments

        return view('appointment.create', ['departments' => $departments]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'department' => 'required|exists:departments,id',
            'doctor' => 'required|exists:doctors,id',
        ]);

        $department = Department::findOrFail($request->input('department'));
        $doctor = Doctor::findOrFail($request->input('doctor'));

        $newAppointment = Appointment::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'department_id' => $department->id,
            'doctor_id' => $doctor->id,
            'confirmation_token' => Str::random(40),
        ]);
    
        // Send confirmation email
        Mail::to($data['email'])->send(new AppointmentConfirmation([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'department' => $department,
            'doctor' => $doctor,
        ]));

        return redirect()->route('appointment.index');
    }
}
