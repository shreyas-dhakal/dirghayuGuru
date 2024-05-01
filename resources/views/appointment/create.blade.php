<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book an Appointment</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Book an Appointment</h1>
        <form method="POST" action="{{ route('appointment.store') }}">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender:</label>
                <select id="gender" name="gender" class="form-select">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" id="phone" name="phone" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <select id="department" name="department" class="form-select">
                    <option value="">Select Department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="doctor" class="form-label">Doctor:</label>
                <select id="doctor" name="doctor" class="form-select">
                    <option value="">Select Doctor</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('department').addEventListener('change', function () {
            var departmentId = this.value;
            var doctorSelect = document.getElementById('doctor');
    
            // Clear existing options
            doctorSelect.innerHTML = '<option value="">Select Doctor</option>';
    
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
</html>
