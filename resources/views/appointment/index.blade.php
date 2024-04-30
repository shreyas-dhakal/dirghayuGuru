<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointments</title>
</head>
<body>
    <h1>Appointments</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <div>
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Phone Number</th>
                    <th>Department</th>
                    <th>Doctor</th>
                    <th>Status</th>
                    
                </tr>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->name }}</td>
                        <td>{{ $appointment->email }}</td>
                        <td>{{ $appointment->gender }}</td>
                        <td>{{ $appointment->phone }}</td>
                        <td>{{ $appointment->department->name }}</td>
                        <td>{{ $appointment->doctor->name }}</td>
                        <td>
                        <form method="post" action="{{ url('/appointment/'.$appointment->id.'/archive') }}">
                            @csrf
                            @method('POST')
                            <button type="submit">Done</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
