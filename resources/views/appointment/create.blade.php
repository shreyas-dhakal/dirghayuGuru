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
                    <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                    <select id="doctor" name="doctor" class="form-select" required>
                        <option value="" disabled selected>Select Doctor</option>
                        @foreach ($doctors as $doctor)
                            <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="appointment-button btn btn-primary w-100" id="appointment-button">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('department').addEventListener('change', function () {
            var departmentId = this.value;
            var doctorSelect = document.getElementById('doctor');
    
            // Clear existing options
            doctorSelect.innerHTML = '<option value="" disabled selected>Select Doctor</option>';
    
            // Fetch doctors for selected department via AJAX
            if (departmentId) {
                fetch('/doctors/' + departmentId)
                    .then(response => response.json())
                    .then(doctors => {
                        doctors.forEach(function (doctor) {
                            var option = document.createElement('option');
                            option.value = doctor.id;
                            option.text = doctor.name;
                            doctorSelect.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.error('Error fetching doctors:', error);
                    });
            }
        });
    </script>
</body>
@endsection
