<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('appointment.store') }}">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="department">Department</label>
            <select id="department" name="department" class="form-control">
                <option value="">Select Department</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="doctor">Doctor:</label>
            <select id="doctor" name="doctor" class="form-control">
                <option value="">Select Doctor</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
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
