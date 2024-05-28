@extends('master')
@section('content')
<body>
    <div class="mb-4">
        @if($errors->any())
        <ul class="list-disc pl-5 text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="container mb-5">
        <h2 class="our-stories text-center pb-5">
            Book an <span class="green-text">Appointment</span>
        </h2>
        <form method="POST" action="{{ route('appointment.store') }}" class="shadow p-4 rounded bg-light mx-auto" style="max-width: 600px;">
            @csrf
            @method('post')
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                        <select id="gender" name="gender" class="form-select" required>
                            <option value="" disabled selected>Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone Number</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        <input type="text" id="phone" name="phone" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                    <select id="department" name="department" class="form-select" required>
                        <option value="" disabled selected>Select Department</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="doctor" class="form-label">Doctor</label>
                <div class="input-group">
                    <!-- Updated doctor dropdown with additional classes and ID -->
                    <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                    <select id="doctor" name="doctor" class="form-select" required>
                        <option value="" disabled selected>Select Doctor</option>
                        @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- New dropdown for available dates -->
            <div class="mb-3">
                <label for="appointment_date" class="form-label">Appointment Date & Time</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    <select id="appointment_date" name="appointment_date" class="form-select" disabled>
                        <option value="" disabled selected>Select Date & Time</option>
                    </select>
                </div>
            </div>
            <input type="hidden" id="appointment_date_input" name="appointment_date">
            <input type="hidden" id="start_time_input" name="start_time">
            <input type="hidden" id="end_time_input" name="end_time">

            <button type="submit" class="appointment-button btn btn-primary w-100" id="appointment-button">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('doctor').addEventListener('change', function () {
            var doctorId = this.value;
            var appointmentDateSelect = document.getElementById('appointment_date');
        
            // Clear existing options
            appointmentDateSelect.innerHTML = '<option value="" disabled selected>Select Date & Time</option>';
        
            // Fetch available dates for selected doctor via AJAX
            if (doctorId) {
                fetch('/get-available-dates?doctor_id=' + doctorId)
                    .then(response => response.json())
                    .then(appointments => {
                        appointments.forEach(function (appointment) {
                            var option = document.createElement('option');
                            var date = appointment.day + ' (' + appointment.start_time + ' - ' + appointment.end_time + ')';
                            option.value = date;
                            option.text = date;
                            appointmentDateSelect.appendChild(option);
                        });
                        // Enable the appointment date dropdown
                        appointmentDateSelect.disabled = false;
                    })
                    .catch(error => {
                        console.error('Error fetching available dates:', error);
                    });
            } else {
                // Disable the appointment date dropdown if no doctor is selected
                appointmentDateSelect.disabled = true;
            }
        });
        
        // Listen for the form's submit event
        document.querySelector('form').addEventListener('submit', function (event) {
            var appointmentDateSelect = document.getElementById('appointment_date');
            var selectedOption = appointmentDateSelect.options[appointmentDateSelect.selectedIndex].value;
        
            // Split the selected option value to extract date and time
            var dateAndTime = selectedOption.split(' (')[0];
            var startTime = selectedOption.split(' (')[1].split(' - ')[0];
            var endTime = selectedOption.split(' (')[1].split(' - ')[1].replace(')', '');
        
            // Assign the extracted values to hidden input fields
            document.getElementById('appointment_date_input').value = dateAndTime;
            document.getElementById('start_time_input').value = startTime;
            document.getElementById('end_time_input').value = endTime;
        });
        </script>
        
</body>
@endsection

