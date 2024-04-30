<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Appointment;
use Illuminate\Http\Request;

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

        $data['department_id'] = $request->input('department');
        $data['doctor_id'] = $request ->input('doctor');

        $newAppointment = Appointment::create($data);

        return redirect(route('appointment.index'));
    }

}
